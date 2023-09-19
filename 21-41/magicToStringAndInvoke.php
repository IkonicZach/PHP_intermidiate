<?php

use Index as GlobalIndex;

class Index{
    public function __toString()
    {
        return "You can't output objects";
    }
    public function __invoke()
    {
        echo "You are calling a unidentified method.";
    }
}
$obj = new Index();
echo $obj;
?>