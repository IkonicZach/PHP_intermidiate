<?php
class test{
    private $num = 1123;
    public function setter($value){
        $this->num = $value;
    }
    public function getter(){
        return $this->num;
    }
}

$obj = new test();
echo $obj->setter(6969);
echo $obj->getter();
?>