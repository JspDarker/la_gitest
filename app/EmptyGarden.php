<?php

namespace App;


class EmptyGarden
{

    private $width;
    private $height;

    public function __construct($width, $height)
    {

        $this->height = $height;
        $this->width = $width;
    }

    public function items()
    {
        $number = ceil($this->width* $this->height);
        echo $number."<br>";
        var_dump($number);die;
        return array_fill(0,$number, "Hello World");
    }
}

$garden = new EmptyGarden(10,10);
echo "<pre>";
print_r($garden->items());
echo "</pre>";