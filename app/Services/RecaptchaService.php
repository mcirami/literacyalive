<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecaptchaService {

    public function checkRecaptcha($request) {
        $secretKey = config('services.recaptcha.secret_key');
        $token = $request->input('recaptcha_token');
        $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

        $response = Http::asForm()->post($verifyUrl, [
            'secret' => $secretKey,
            'response' => $token,
            // 'remoteip' => $request->ip(), // optional
        ]);

        return $response->json();
    }
}
