<?php

interface Subscription
{
    public function getDescription(): string;
    public function getPrice(): float;
}

class BasicSubscription implements Subscription
{

    public function getDescription(): string
    {
        return "Abonnement de base";
    }

    public function getPrice(): float
    {
        return 9.99;
    }
}

abstract class SubscriptionDecorator implements Subscription
{

    protected Subscription $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function getDescription(): string
    {
        return $this->subscription->getDescription();
    }

    public function getPrice(): float
    {
        return $this->subscription->getPrice();
    }
}

class Option4K extends SubscriptionDecorator
{

    public function getDescription(): string
    {
        return parent::getDescription() . " + Option 4K";
    }

    public function getPrice(): float
    {
        return parent::getPrice() + 5.00;
    }
}

class MultiScreenOption extends SubscriptionDecorator
{

    public function getDescription(): string
    {
        return parent::getDescription() . " + Multi-écrans";
    }

    public function getPrice(): float
    {
        return parent::getPrice() + 3.00;
    }
}

class NoAdsOption extends SubscriptionDecorator
{

    public function getDescription(): string
    {
        return parent::getDescription() . " + Sans publicités";
    }

    public function getPrice(): float
    {
        return parent::getPrice() + 4.00;
    }
}

$subscription = new BasicSubscription();

$subscription = new Option4K($subscription);
$subscription = new MultiScreenOption($subscription);
$subscription = new NoAdsOption($subscription);

echo "Description : " . $subscription->getDescription() . PHP_EOL;
echo "Prix total : " . number_format($subscription->getPrice(), 2) . " €" . PHP_EOL;
