<?php
$A = ["1"=>"One", "2"=>"Two", "3"=>"Three"];

function Bonk($value, $key){
    echo "Key is " . $key . " and value is " . $value . "<hr>";
}

array_walk($A, "Bonk");
?>