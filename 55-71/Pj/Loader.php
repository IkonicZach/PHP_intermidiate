<?php
class Loader{
    public static function load($class){
        require_once $class . ".php";
    }
}