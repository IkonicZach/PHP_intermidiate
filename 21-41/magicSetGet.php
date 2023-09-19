<?php

class mod{
    public function __get($var)
    {
        echo "Your desired property '{$var}' doesn't exist.";
    }
    public function __set($var, $value)
    {
        echo "Your desired property '{$var}' with value '{$value}' doesn't exist.";
    }
}

$obj = new mod();
$obj->name = "GG";
echo $obj->name;
?>