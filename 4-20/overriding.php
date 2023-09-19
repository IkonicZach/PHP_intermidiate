<?php

use Member as GlobalMember;

class Member{
    var $name = "Athu";
    public function do(){
        echo "Doing something ";
    }
    public function friends(){
        echo "I have no friends.";
    }
}
class Overriding extends Member{
    public function friends(){
        echo "Well, I have one friend.";
    }
}
$obj = new Overriding();
echo $obj->do();
echo $obj->friends();
?>