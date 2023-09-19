<?php

use Member as GlobalMember;

class Member{
    var $name = "Pank";
    public function __construct()
    {
        echo "You are gae.";
    }
}
class ParentConstructor extends Member {
    public function __construct()
    {
        parent::__construct();
        echo "You are a man.";
    }
}
$obj = new ParentConstructor();
?>