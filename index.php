<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

$shawarmaodessa = new \App\Shawarma\ShawarmaOdessa();
$shawarmagov = new \App\Shawarma\ShawarmaGov();
$shawarmamutton = new \App\Shawarma\ShawarmaMutton();

$card = new \App\Shawarma\ShawarmaCalculator();
$card->add($shawarmaodessa);
$card->add($shawarmagov);
$card->add($shawarmamutton);