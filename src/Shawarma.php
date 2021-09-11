<?php

namespace App\Shawarma;

abstract class Shawarma
{
    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}