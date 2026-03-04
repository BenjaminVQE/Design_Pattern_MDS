<?php

interface PaymentStrategy
{
    public function pay(float $amount): void;
}

class CardPayment implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Paiement par carte de $amount € effectué." . PHP_EOL;
    }
}

class PaypalPayment implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Paiement PayPal de $amount € effectué." . PHP_EOL;
    }
}

class Checkout
{
    private PaymentStrategy $strategy;

    public function __construct(PaymentStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function process(float $amount): void
    {
        $this->strategy->pay($amount);
    }
}

$checkout = new Checkout(new PaypalPayment());
$checkout->process(49.99);
