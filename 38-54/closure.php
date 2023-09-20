<?php
$n =100;
$v = function() use($n) {
    echo "This is closure {$n}";
};
$v();
?>