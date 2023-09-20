<?php
$n = 101;
$anno = function($text){
    global $n;
    echo "This is anonymous " . $text .$n;
};

$anno("losers");
?>