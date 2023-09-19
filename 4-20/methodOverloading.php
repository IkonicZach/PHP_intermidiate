<?php
class overload{
    public function do($default){
        echo "Value is " . $default;
    }
    public function doit()
    {
        echo "Value is 69.";
    }
}
$obj = new overload();
$obj->do(20);
?>