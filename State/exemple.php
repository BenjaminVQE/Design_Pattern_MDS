<?php

interface OrderState
{
    public function pay(Order $order): void;
    public function ship(Order $order): void;
    public function getName(): string;
}

class Order
{

    private OrderState $state;

    public function __construct()
    {
        $this->state = new PendingState();
    }

    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function pay(): void
    {
        $this->state->pay($this);
    }

    public function ship(): void
    {
        $this->state->ship($this);
    }

    public function getState(): string
    {
        return $this->state->getName();
    }
}

class PendingState implements OrderState
{

    public function pay(Order $order): void
    {
        echo "💳 Paiement effectué." . PHP_EOL;
        $order->setState(new PaidState());
    }

    public function ship(Order $order): void
    {
        echo "❌ Impossible d'expédier : commande non payée." . PHP_EOL;
    }

    public function getName(): string
    {
        return "En attente";
    }
}

class PaidState implements OrderState
{

    public function pay(Order $order): void
    {
        echo "❌ Commande déjà payée." . PHP_EOL;
    }

    public function ship(Order $order): void
    {
        echo "📦 Commande expédiée." . PHP_EOL;
        $order->setState(new ShippedState());
    }

    public function getName(): string
    {
        return "Payée";
    }
}

class ShippedState implements OrderState
{

    public function pay(Order $order): void
    {
        echo "❌ Commande déjà expédiée." . PHP_EOL;
    }

    public function ship(Order $order): void
    {
        echo "❌ Commande déjà expédiée." . PHP_EOL;
    }

    public function getName(): string
    {
        return "Expédiée";
    }
}

$order = new Order();

echo "État initial : " . $order->getState() . PHP_EOL;

$order->ship();
$order->pay();
echo "État actuel : " . $order->getState() . PHP_EOL;

$order->ship();
echo "État actuel : " . $order->getState() . PHP_EOL;

$order->pay();
