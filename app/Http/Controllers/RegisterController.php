<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampRegisterRequest;
use App\Mail\CampPurchase;
use App\Mail\CampRegistration;
use App\Mail\Contact;
use App\Services\RecaptchaService;
use App\Services\StripeService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\ApiErrorException;
use Stripe\StripeClient;

class RegisterController extends Controller
{
    public function show(Request $request): View {

        if( $request->get( 'paid' ) !== null ) {
            return view('register.show')->with('paid_error', 'Something went wrong. Please try again.');
        }

        return view('register.show');
    }

    public function submitRegister(CampRegisterRequest $request, StripeService $stripeService, RecaptchaService $recaptchaService): Redirector|RedirectResponse {

        $captchaResult = $recaptchaService->checkRecaptcha($request);
        // $captchaResult['success'] is true/false
        // $captchaResult['score'] is from 0.0 (bad) to 1.0 (good)
        // $captchaResult['action'] is the action name you used (e.g. 'contact_form')
        if (!$captchaResult['success'] || $captchaResult['score'] < 0.5) {
            return back()->withErrors(['error' => 'reCAPTCHA validation failed.']);
        }

        $data = $request->all();
        //session(['campRegisterData' => $data]);


        $email = App::environment('production') ? 'contact@literacyalive.org' : 'matteo@moneylovers.com';

        Mail::to($email)->send(new CampRegistration($data));

        $stripe = $stripeService->createStripeGateway();

        $checkoutSession = $stripeService->createStripeCheckoutUrl($stripe, $data);

        return redirect()->away($checkoutSession->url);
    }

    public function purchaseSuccess(Request $request, StripeClient $stripe) {
        // Grab the form data from the session
        //$data = session('campRegisterData');
        $sessionId = $request->query('session_id', '');

        if (!$sessionId || $sessionId === '{CHECKOUT_SESSION_ID}') {
            return redirect()->route('register.show')->withErrors('Missing session_id.');
        }

        try {
            // Expand to get richer data in a single call
            $session = $stripe->checkout->sessions->retrieve($sessionId, [
                'expand' => ['payment_intent', 'customer', 'line_items']
            ]);
        } catch (ApiErrorException $e) {
            Log::error('Stripe session retrieve failed', [
                'session_id' => $sessionId,
                'error' => $e->getMessage(),
            ]);
            return redirect()->route('register.show')->withErrors('Unable to verify your payment. Please contact support.');
        }

        // Basic sanity checks
        if ($session->payment_status !== 'paid') {
            return redirect()->route('register.show')->withErrors('Payment not completed.');
        }

        // Collect data for email/logging
        $meta = $session->metadata ?? new \stdClass();
        $data = [
            'date' => $meta->date_label ?? null, // human-readable label if you stored it
            'email' => optional($session->customer_details)->email ?? $session->customer_email,
            'name' => $meta->register_name ?? null,
            'child_name' => $meta->child_name ?? null,
        ];

        $emailTo = App::environment('production') ? 'contact@literacyalive.org' : 'matteo@moneylovers.com';

        try {
            Mail::to($emailTo)->send(new CampPurchase($data));
        } catch (\Throwable $e) {
            Log::error('CampPurchase mail failed', ['error' => $e->getMessage(), 'data' => $data]);
        }

        Log::channel('my_log')->info('user purchased camp', ['data' => $data]);

        return redirect()
            ->route('register.show')
            ->with([
                'success' => 'You Successfully Registered!',
                'selected_date_id' => $data['date_id'],
            ]);
    }
}
