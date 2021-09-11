<?php

namespace App\Shawarma;

final class ShawarmaGov extends Shawarma
{
    protected string $title = ' Шаурма говяжья';
    protected float $cost = 75;
    protected array $ingredients = [
        'чесночный соус',
        'говяжий окорок',
        'огурцы маринованные',
        'маринованный лук с барбарисом и зеленью',
        'салат коул слоу',
        'тандырный лаваш',
        'помидоры свежие',
        'хумус',
        'соус тахин'
    ];
}