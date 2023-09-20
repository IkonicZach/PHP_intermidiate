<?php

class test{

}
class Ind{
    public function show(test $n){
        var_dump($n);
    }
}
$t = new test();
$obj = new Ind();
$obj->show($t);
