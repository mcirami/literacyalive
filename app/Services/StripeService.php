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

        //$dateId = (string) $data['date'];
        //March 16 - price_1S5qB8G6aC6DMTjHl82WcqsA
        // March 17 - price_1S5qDaG6aC6DMTjHmBK89M0l
        // dec 22 - price_1S5qFvG6aC6DMTjHrHBEgCjm

        $price = App::environment('production')
            ? 'price_1R58jeG6aC6DMTjH4NRgwaK4'
            : 'price_1R5BftG6aC6DMTjHicig4m8g';

       /* if (!isset($prices[$dateId])) {
            abort(422, 'Invalid date selection.');
        }*/

        // Human-readable labels (optional; useful for emails/logs)
        $dateLabel = 'July 27th - July 31st';
        // Build URLs
        // Use the session-id placeholder so we can fetch data after redirect; avoid putting PII in the URL.
        $successUrl = route('purchase.success') . '?session_id={CHECKOUT_SESSION_ID}';
        $cancelUrl = route('register.show', ['paid' => 'fail']);

        // Create Checkout Session
        return $stripe->checkout->sessions->create([
            'mode' => 'payment',
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
            'customer_email' => $data['email'], // or collect via Stripe directly
            'line_items' => [[
                'price' => $price,
                'quantity' => 1,
            ]],
            // Put only what you need; avoid excess PII. Email is already customer_email.
            'metadata' => [
                'date_label'    => $dateLabel,
                'register_name' => $data['name'],
                'child_name'    => $data['child_name'],
            ],
        ]);
    }
}
