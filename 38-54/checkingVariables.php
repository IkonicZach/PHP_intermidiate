<?php
class Index{
    public function show($n){
        switch($n){
            case is_int($n): echo "It is integer."; break;
            case is_bool($n): echo "It is boolean."; break;
            case is_array($n): echo "It is array."; break;
            case is_double($n): echo "It is double."; break;
        }
    }
}
$obj = new Index();
$obj->show(true);
?>