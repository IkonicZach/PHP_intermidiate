<?php

namespace app;

use app\gen\shapes;

class Square implements shapes {
    private $width, $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width * $this->height;
    }
}