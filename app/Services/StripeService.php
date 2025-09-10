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
        $dateId = (string) $data['date'];
        //March 16 - price_1S5qB8G6aC6DMTjHl82WcqsA
        // March 17 - price_1S5qDaG6aC6DMTjHmBK89M0l
        // dec 22 - price_1S5qFvG6aC6DMTjHrHBEgCjm

        /*if (App::environment() == 'production') {
            //$priceID = 'price_1R58jeG6aC6DMTjH4NRgwaK4'; For Original $200 summer camp
            $priceID = 'price_1S5qFvG6aC6DMTjHrHBEgCjm';
           if($data['date'] == 1) {
                $priceID = 'price_1R5BftG6aC6DMTjHicig4m8g';
            } elseif ($data['date'] == 2) {
                $priceID = 'price_1S5qDaG6aC6DMTjHmBK89M0l';
            }
        } else {
            //$priceID = 'price_1R5BftG6aC6DMTjHicig4m8g'; For Original $200 summer camp
            $priceID = 'price_1S5qb5G6aC6DMTjHIe6DgAsv';
            if($data['date'] == 1) {
                $priceID = 'price_1S5qZmG6aC6DMTjHaJxDwr8A';
            } elseif ($data['date'] == 2) {
                $priceID = 'price_1S5qaGG6aC6DMTjHFu9oTRRr';
            }
        }*/

        $prices = App::environment('production')
            ? [ // prod prices
                '0' => 'price_1S5qFvG6aC6DMTjHrHBEgCjm', // Dec 22, 2025
                '1' => 'price_1R5BftG6aC6DMTjHicig4m8g', // Mar 16, 2026
                '2' => 'price_1S5qDaG6aC6DMTjHmBK89M0l', // Mar 17, 2026
            ]
            : [ // sandbox/dev prices
                '0' => 'price_1S5qb5G6aC6DMTjHIe6DgAsv', // Dec 22, 2025
                '1' => 'price_1S5qZmG6aC6DMTjHaJxDwr8A', // Mar 16, 2026
                '2' => 'price_1S5qaGG6aC6DMTjHFu9oTRRr', // Mar 17, 2026
            ];

        if (!isset($prices[$dateId])) {
            abort(422, 'Invalid date selection.');
        }

        // Human-readable labels (optional; useful for emails/logs)
        $dateLabels = [
            '0' => 'December 22, 2025',
            '1' => 'March 16, 2026',
            '2' => 'March 17, 2026',
        ];
        // Build URLs
        // Use the session-id placeholder so we can fetch data after redirect; avoid putting PII in the URL.
        $successUrl = route('purchase.success', ['session_id' => '{CHECKOUT_SESSION_ID}']);
        $cancelUrl = route('register.show', ['paid' => 'fail']);

        // Create Checkout Session
        return $stripe->checkout->sessions->create([
            'mode' => 'payment',
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
            'customer_email' => $data['email'], // or collect via Stripe directly
            'line_items' => [[
                'price' => $prices[$dateId],
                'quantity' => 1,
            ]],
            // Put only what you need; avoid excess PII. Email is already customer_email.
            'metadata' => [
                'date_id' => $dateId,
                'date_label' => $dateLabels[$dateId] ?? null,
                'register_name' => $data['name'],
                'child_name' => $data['child_name'],
            ],
        ]);

        /*return $stripe->checkout->sessions->create([
            'success_url'   => $domain . '/camp-register/success?register_email=' . $data['email'] . '&child_name=' . $data['child_name'] . '&register_name=' . $data['name'],
            'cancel_url'    => $domain . '/camp-register/?paid=fail',
            'line_items' => [[
                'price'     => $priceID,
                'quantity'  => 1,
            ]],
            'mode'                      => 'payment',
            'payment_method_types'      => [],
            'customer_email'            => $data['email'],
        ]);*/
    }
}
