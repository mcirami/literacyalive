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

    public function createStripeCheckoutUrl($stripe, $data) {

        $domain = config('app.url');

        //March 16 - price_1S5qB8G6aC6DMTjHl82WcqsA
        // March 17 - price_1S5qDaG6aC6DMTjHmBK89M0l
        // dec 22 - price_1S5qFvG6aC6DMTjHrHBEgCjm

        if (App::environment() == 'production') {
            //$priceID = 'price_1R58jeG6aC6DMTjH4NRgwaK4'; For Original $200 summer camp
            if ($data['date'] == 0) {
                $priceID = 'price_1S5qFvG6aC6DMTjHrHBEgCjm';
            } elseif($data['date'] == 1) {
                $priceID = 'price_1R5BftG6aC6DMTjHicig4m8g';
            } elseif ($data['date'] == 2) {
                $priceID = 'price_1S5qDaG6aC6DMTjHmBK89M0l';
            }
        } else {
            //$priceID = 'price_1R5BftG6aC6DMTjHicig4m8g'; For Original $200 summer camp
            if ($data['date'] == 0) {
                $priceID = 'price_1S5qb5G6aC6DMTjHIe6DgAsv';
            } elseif($data['date'] == 1) {
                $priceID = 'price_1S5qZmG6aC6DMTjHaJxDwr8A';
            } elseif ($data['date'] == 2) {
                $priceID = 'price_1S5qaGG6aC6DMTjHFu9oTRRr';
            }
        }

        return $stripe->checkout->sessions->create([
            'success_url'   => $domain . '/camp-register/success?register_email=' . $data['email'] . '&child_name=' . $data['child_name'] . '&register_name=' . $data['name'],
            'cancel_url'    => $domain . '/camp-register/?paid=fail',
            'line_items' => [[
                'price'     => $priceID,
                'quantity'  => 1,
            ]],
            'mode'                      => 'payment',
            'payment_method_types'      => [],
            'customer_email'            => $data['email'],
        ]);
    }
}
