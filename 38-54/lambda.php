<?php
function did($p1, $p2, $p3){
    $total = $p1 + $p2;
    $p3($total);
}
$k = function($n){
    echo "This is lambda {$n}";
};

did(5, 9, $k);
?>