<?php

use Index as GlobalIndex;

class Index{
    public function __sleep()
    {
        echo "Serialized<br>";
        return [];
    }
    public function __wakeup()
    {
        echo "unserialized<br>";

    }
}
$obj = new Index();
$se = serialize($obj);
$unse = unserialize($se);
?>