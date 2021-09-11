<?php

namespace App\Shawarma;

final class ShawarmaMutton extends Shawarma
{
    protected string $title = ' Шаурма из Баранины';
    protected float $cost = 85;
    protected array $ingredients = [
        'острый соус',
        'огурцы маринованные',
        'кинза',
        'помидоры свежие',
        'маринованный лук с барбарисом и зеленью',
        'мясо баранины',
        'лаваш арабский'
    ];
}