<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Stripe\StripeClient;

class StripeService {

    /**
     * @return StripeClient
     */
    public function createStripeGateway(): StripeClient {

        if (App::environment() == 'production') {
            return new StripeClient(config('services.stripe.secret'));
        } else {
            return new StripeClient(config('services.stripe.sandbox_secret'));
        }

    }

    public function createStripeCheckoutUrl($stripe, $userEmail) {
        dd($stripe);
        $domain = config('app.url');

        if (App::environment() == 'production') {
            $priceID = 'price_1R58jeG6aC6DMTjH4NRgwaK4';
        } else {
            $priceID = 'price_1R5BftG6aC6DMTjHicig4m8g';
        }

        return $stripe->checkout->sessions->create([
            'success_url'   => $domain . '/camp-register/success',
            'cancel_url'    => $domain . '/camp-register/?paid=fail',
            'line_items' => [[
                'price'     => $priceID,
                'quantity'  => 1,
            ]],
            'mode'                      => 'payment',
            'payment_method_types'      => [],
            'customer_email'            => $userEmail,
        ]);
    }
}
