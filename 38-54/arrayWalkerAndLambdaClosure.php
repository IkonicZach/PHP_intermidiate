<?php
$n = 100;
$A = ["1"=>"One", "2"=>"Two", "3"=>"Three"];

array_walk($A, function ($value, $key) use (&$n){
    $n = ++$n;
    echo "Key is " . $key . " and value is " . $value . " and surrent stage is " . $n . "<hr>";
});