<?php

interface Observer
{
    public function update(string $status): void;
}

interface Subject
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}


class Order implements Subject
{

    private array $observers = [];
    private string $status;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn($obs) => $obs !== $observer
        );
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
        $this->notify();
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->status);
        }
    }
}


class EmailNotifier implements Observer
{
    public function update(string $status): void
    {
        echo "📧 Email envoyé : nouveau statut = $status" . PHP_EOL;
    }
}

class LogNotifier implements Observer
{
    public function update(string $status): void
    {
        echo "📝 Log écrit : statut changé en $status" . PHP_EOL;
    }
}


$order = new Order();

$order->attach(new EmailNotifier());
$order->attach(new LogNotifier());

$order->setStatus("Payée");
$order->setStatus("Expédiée");
