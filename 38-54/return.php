<?php

use test as GlobalTest;

class test
{
    public function return(int $n): string
    {
        return $n;
    }
}

$ob = new test();
$ob->return(34);
var_dump($ob);
