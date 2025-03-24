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

        return redirect($checkoutSession->url);
    }

    public function purchaseSuccess(Request $request) {
        // Grab the form data from the session
        //$data = session('campRegisterData');

        $data = [
            'email'         => $request->register_email,
            'name'          => $request->register_name,
            'child_name'    => $request->child_name
        ];

        $email = App::environment('production') ? 'contact@literacyalive.org' : 'matteo@moneylovers.com';

        Mail::to($email)->send(new CampPurchase($data));

        // Maybe the session expired or something
        Log::channel('my_log')->info('user purchased camp', [
            'data' => $data,
        ]);

        return redirect()->route('register.show')->with('success', 'You Successfully Registered!');

    }
}
