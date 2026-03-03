<?php

interface PaymentProcessor
{
    public function processPayment(float $amount): void;
}


class StripeAPI
{

    public function makePayment(float $sum): void
    {
        echo "💳 Paiement Stripe de $sum € effectué." . PHP_EOL;
    }
}

class StripeAdapter implements PaymentProcessor
{

    private StripeAPI $stripe;

    public function __construct(StripeAPI $stripe)
    {
        $this->stripe = $stripe;
    }

    public function processPayment(float $amount): void
    {
        $this->stripe->makePayment($amount);
    }
}


function checkout(PaymentProcessor $processor)
{
    $processor->processPayment(49.99);
}

$stripe = new StripeAPI();
$adapter = new StripeAdapter($stripe);

checkout($adapter);
