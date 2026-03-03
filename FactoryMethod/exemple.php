<?php
// MAUVAISE PRATIQUE :

// MAUVAISE PRATIQUE :
// (présente mais pas utilisée dans la version finale)
/*
class CoinService
{
    public function validate(string $type): string
    {
        if ($type === "euro") {
            $coin = new EuroCoin();
        } elseif ($type === "dollar") {
            $coin = new DollarCoin();
        } elseif ($type === "yen") {
            $coin = new YenCoin();
        } else {
            throw new Exception("Type de pièce inconnu");
        }

        return $coin->validate();
    }
}

class EuroCoin
{
    public function validate(): string
    {
        return "Pièce Euro validée.";
    }
}

class DollarCoin
{
    public function validate(): string
    {
        return "Pièce Dollar validée.";
    }
}

class YenCoin
{
    public function validate(): string
{
    return "Pièce Yen validée.";
}
}

$service = new CoinService();
echo $service->validate("euro");
*/


// BONNE PRATIQUE :

interface Coin
{
    public function validate(): string;
}

abstract class CoinCreator
{
    abstract public function createCoin(): Coin;

    public function validateCoin(): string
    {
        $coin = $this->createCoin();
        return $coin->validate();
    }
}

class EuroCoin implements Coin
{
    public function validate(): string
    {
        return "Pièce Euro validée.";
    }
}

class EuroCoinCreator extends CoinCreator
{
    public function createCoin(): Coin
    {
        return new EuroCoin();
    }
}

class DollarCoin implements Coin
{
    public function validate(): string
    {
        return "Pièce Dollar validée.";
    }
}

class DollarCoinCreator extends CoinCreator
{
    public function createCoin(): Coin
    {
        return new DollarCoin();
    }
}

$creator = new EuroCoinCreator();
echo $creator->validateCoin();

$creator = new DollarCoinCreator();
echo $creator->validateCoin();
