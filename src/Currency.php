<?php
declare(strict_types=1);
namespace App\Money;
class Currency
{
    private string $isoCode;
    private array $currency=['USD','UAH','RUB','EUR'];
    public function __construct($isoCode)
    {
        if (!in_array(strtoupper($isoCode), $this->getCurrency())){
        echo "Такой валюты нет";
    }
        $this->setIsoCode($isoCode);
    }
    public function getCurrency(): array
    {
        return $this->currency;
    }
    public function equals(self $cur): bool
    {
        return $this->getIsoCode() == $cur->getIsoCode();
    }
    public function getIsoCode()
    {
        return $this->isoCode;
    }
    private function setIsoCode($isoCode): void
    {
        $this->isoCode = $isoCode;
    }
    private function setCurrency(array $currency): void
    {
        $this->currency = $currency;
    }
}
?>