<?php
declare(strict_types=1);
class rgb
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);

    }

    public function setRed(int $red)
    {
        $this->red = $red;
        if ($red <= 0 and $red >= 255) {
            exit('Значение не может быть меньше 0 или больше 255');
        }
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function setBlue(int $blue)
    {
        $this->blue = $blue;
        if ($blue <= 0 and $blue >= 255) {
            exit('Значение не может быть меньше 0 или больше 255');
        }
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    public function setGreen(int $green)
    {
        $this->green = $green;
        if ($green <= 0 and $green >= 255) {
            exit('Значение не может быть меньше 0 или больше 255');
        }
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function mix(rgb $color): rgb
    {
        return new rgb(
            intdiv($this->getRed() + $color->getRed(), 2),
            intdiv($this->getGreen() + $color->getGreen(), 2),
            intdiv($this->getBlue() + $color->getBlue(), 2)
        );
    }
    public function equals($color): bool
    {
        if ($this->getRed() == $color->getRed() &&
            $this->getGreen() == $color->getGreen() &&
            $this->getBlue() == $color->getBlue()) {
        return true;
        }
        else{
            return false;
        }
    }
}
$one=new rgb(1,1,1);
$two=new rgb(1, 1,1);
echo "<pre>";
var_dump([$one, $two]);
echo "<pre>";
$mix=$one->mix($two);
$equals=$one->equals($two);
var_dump($equals);
var_dump($mix);