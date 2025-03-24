<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use App\Services\RecaptchaService;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(): \Illuminate\Contracts\View\View {
        return view('contact-us');
    }

    /**
     * @throws ConnectionException
     */
    public function sendMail(ContactRequest $request, RecaptchaService $recaptchaService): \Illuminate\Http\RedirectResponse {

        $captchaResult = $recaptchaService->checkRecaptcha($request);

        // $captchaResult['success'] is true/false
        // $captchaResult['score'] is from 0.0 (bad) to 1.0 (good)
        // $captchaResult['action'] is the action name you used (e.g. 'contact_form')
        if (!$captchaResult['success'] || $captchaResult['score'] < 0.5) {
            return back()->withErrors(['error' => 'reCAPTCHA validation failed.']);
        }

        $email = App::environment('production') ? 'contact@literacyalive.org' : 'matteo@moneylovers.com';

        Mail::to($email)->send(new Contact($request->all()));

        return back()->with('success', 'Your message has been sent!');
    }
}
