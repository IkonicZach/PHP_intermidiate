<?php

require_once "Loader.php";

class Index{
    public function __construct()
    {
        Loader::load('Helper');
        $helper = new Helper("Helper");
        $helper->yourName();

        echo "<hr>";

        Loader::load('Hee');
        $hee = new Hee();
        $hee->heehee();
    }
}

$obj = new Index();