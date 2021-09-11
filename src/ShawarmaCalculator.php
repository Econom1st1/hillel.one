<?php

namespace App\Shawarma;

class ShawarmaCalculator
{
    protected array $shawarmaCard = [];
    protected float $totalPrice = 0;
    protected array $totalIngredients = [];

    public function add(Shawarma $shawarma): void
    {
        $this->setShawarmaCard($shawarma->getTitle());
        $this->ingredients($shawarma->getIngredients());
        $this->price($shawarma->getCost());
    }

    public function ingredients(array $ingredients)
    {
        $this->setTotalIngredients($ingredients);
    }

    public function price(float $price): void
    {
        $this->setTotalPrice($this->getTotalPrice() + $price);
    }

    public function getShawarmaCard(): array
    {
        return $this->shawarmaCard;
    }

    protected function setShawarmaCard(string $shawarma): void
    {
        if (!in_array($shawarma, $this->getShawarmaCard())) {
            $this->shawarmaCard[] = $shawarma;
        }
    }

    public function getTotalPrice(): float|int
    {
        return $this->totalPrice;
    }

    protected function setTotalPrice(float|int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function getTotalIngredients(): array
    {
        return $this->totalIngredients;
    }

    protected function setTotalIngredients(array $totalIngredients): void
    {
        foreach ($totalIngredients as $ingredient) {
            if (!in_array($ingredient, $this->getTotalIngredients())) {
                $this->totalIngredients[] = $ingredient;
            }
        }
    }
}