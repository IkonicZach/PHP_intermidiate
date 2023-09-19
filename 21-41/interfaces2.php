<?php

use Index as GlobalIndex;

interface Inter{
    public function set($value);
}
class Index implements Inter {
    private $value;
    public function set($value){
        $this->value = $value;
    }
    public function action(){
        echo "Taking action with " . $this->value;
    }
}
$obj = new Index();
$obj->set("PP");
$obj->action();
?>