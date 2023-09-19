<?php
class Member
{
    var $id = "M001";
    var $name = "Athu";
    var $age = "20";
    public function friends()
    {
        echo "I have no friends.";
    }
}
class GoldMember extends Member
{
}
$obj = new GoldMember();
echo $obj->friends();
?>