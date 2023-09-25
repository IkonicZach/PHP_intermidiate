<?php
class Helpper
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function yourName()
    {
        echo "Name is " . $this->name;
    }
}
