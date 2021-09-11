<?php

namespace App\Shawarma;

final class ShawarmaOdessa extends Shawarma
{
    protected string $title = 'Шаурма Одесская';
    protected float $cost = 69;
    protected array $ingredients = [
        'огурцы маринованные',
        'картофель жареный',
        'чесночный соус',
        'тандырный лаваш',
        'маринованный лук с барбарисом и зеленью',
        'мясо куриное',
        'салат коул слоу',
        'корейская морковь'
    ];
}