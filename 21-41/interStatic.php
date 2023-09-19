<?php
#STATIC

use Index as GlobalIndex;

class Index{
    private static $count = 0;

    public function getCount(){
        self::$count++;
        echo self::$count . "<br>";
    }
}
$obj = new Index();
$obj->getCount();
$obj->getCount();
$obj->getCount();
$obj->getCount();
echo "<hr>";
$obj2 = new Index();
$obj2->getCount();


echo "<hr>";
echo "<hr>";
echo "<hr>";

#NON-STATIC
//non static can call static
//static can't call non-static

class IND{
    public static $count = 0;
    public function show(){
        self::do();
    }
    public static function do(){
        echo "DODODODODODODODODO";
    } 
}
$ind = new IND();
echo $ind->show();
?>