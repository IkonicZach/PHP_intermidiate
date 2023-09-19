<?php
class thisTest{
    public $gender = "Gae";
    public function changeGender(){
        $this->gender = "Female";
    }
}
$obj = new thisTest();
$obj->changeGender();
echo $obj->gender;

$o2 = new thisTest();
echo $o2->gender;
?>