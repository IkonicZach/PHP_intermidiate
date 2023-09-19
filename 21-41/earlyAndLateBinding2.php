<?php
class One{
    public static $name = "Athu";
    public static function Name(){
        return self::$name;
    }
    public static function getName(){
        echo self::getName();
    }
}
One::getName();
class Two extends One{

}
?>