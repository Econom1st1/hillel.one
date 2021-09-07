<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';
$usd = new \App\Money\Currency('USD');
$uah = new \App\Money\Currency('UAH');
var_dump($usd->equals($uah));
$one = new \App\Money\Money(10, $usd);
$two = new \App\Money\Money(10, $uah);
var_dump($one->equals($two));
$three = new \App\Money\Money(20, $usd);
$one->add($three);