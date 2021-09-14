<?php

namespace App\autoloader;

class Autoloader
{
    protected $map;

    public function addNamespace(string $prefix, string $dir)
    {
        $this->map[$prefix]=$dir;
    }

    public function register()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($class)
    {
        $file = null;
        foreach ($this->map as $prefix=>$dir){
            if(str_contains($class, $prefix)!==false){
                $class=explode('\\', $class);
                array_shift($class);
                $file=realpath($dir.DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $class) . '.php');
            }
        }

        if(null!=$file){
            include $file;
        }
    }
}
$autoload= new Autoloader();
$autoload->addNamespace('App', __DIR__.DIRECTORY_SEPARATOR.'../src');
$autoload->addNamespace('Shawarma', __DIR__.DIRECTORY_SEPARATOR.'../src');
$autoload->register();
