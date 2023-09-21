<?php

namespace app;

use app\gen\shapes;

class Circle implements shapes{

    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getArea(){
        return $this->radius * $this->radius * pi();
    }
}