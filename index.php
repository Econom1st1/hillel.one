<?php
declare(strict_types=1);
class rgb{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);

    }
    public function setRed(int $red){
        $this->red=$red;
        if($red<=0 and $red>=255){
            exit('Значение не может быть меньше 0 или больше 255');
        }
    }
    public function getRed():int{
        return $this->red;
    }
    public function setBlue(int $blue){
        $this->blue=$blue;
        if($blue<=0 and $blue>=255){
            exit('Значение не может быть меньше 0 или больше 255');
        }
    }
    public function getBlue():int{
        return $this->blue;
    }
    public function setGreen(int $green){
        $this->green=$green;
        if($green<=0 and $green>=255){
            exit('Значение не может быть меньше 0 или больше 255');
        }
    }
    public function getGreen():int{
        return $this->green;
    }
}
$one=new rgb(0,0,0);
$two=new rgb(255, 255,255);
echo "<pre>";
var_dump([$one, $two]);
echo "<pre>";