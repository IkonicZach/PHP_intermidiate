<?php
use app\gen\shapes;

require_once "vendor/autoload.php";

class Inndex
{
    public function __construct()
    {
        $square = new app\Square(20, 20);
        $this->getPrice($square);

        echo "<hr>";

        $circle = new app\Circle(30);
        $this->getPrice($circle);
        
    }
    public function getPrice(shapes $value){
        $area = $value->getArea();
        echo "The price: " . ($area * 10) . " $<hr>";
    }
}

new Inndex();
