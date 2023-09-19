<?php
class encapsulation{
    private $age = "23";
    public function getter(){
        return $this->age;
    }
}
$obj = new encapsulation();
echo $obj->getter();
?>