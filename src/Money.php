<?php

declare(strict_types=1);

namespace App\Money;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(int|float $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function equals(Money $money): bool
    {
        return $this->getAmount() == $money->getAmount()
            && $this->getCurrency()->getIsocode() == $money->getCurrency()->getIsocode();
    }

    public function add(Money $money)
    {
        if (!($this->getCurrency()->getIsocode() == $money->getCurrency()->getIsocode())) {
            echo "Нет такой валюты";
        }
        $this->setAmount($this->getAmount() + $money->getAmount());
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    private function setAmount(int|float $amount)
    {
        $this->amount = $amount;
    }

    private function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }
}
