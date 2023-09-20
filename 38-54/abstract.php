<?php
//Abs method dont have body
//Only abs class can have abs method.
abstract class Par{
    const DB_HOST = "Arhu";
    public $name = "Gon";

    public abstract function Abs();

    public function func(){
        echo "This is func.";
    }
}
class Mai extends Par{
    public function Abs(){
        echo "This is abstract.";
    }
}
$obj = new Mai();
echo $obj->Abs();
