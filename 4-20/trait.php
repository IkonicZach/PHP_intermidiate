<?php

trait Member{
    var $name = "Gonzalo";
}
trait Hacker{
    var $age = 20;
}
class TraitTest{
    use Member, Hacker;
}
$obj = new TraitTest();
echo $obj->age;
?>