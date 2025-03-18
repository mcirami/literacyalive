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
        $domain = config('app.url');

        return $stripe->checkout->sessions->create([
            'success_url'   => $domain . '/camp-register/success',
            'cancel_url'    => $domain . '/camp-register/?paid=fail',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Camp Registration',
                    ],
                    'unit_amount' => 20000,
                ],
                'quantity'      => 1,
            ]],
            'mode'                      => 'payment',
            'payment_method_types'      => [],
            'customer_email'            => $userEmail,
        ]);
    }
}
