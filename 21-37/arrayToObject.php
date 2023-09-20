<?php
$A = ["One"=>1,"Two"=>2,"Three"=>3,"Four"=>4,"Five"=>5];
$obj = (object) $A;
var_dump($A);
echo "<hr>" . $A["One"];
echo "<hr>";

$obj = (object) $A;
var_dump($obj);

echo "<hr>" . $obj->One;
?>