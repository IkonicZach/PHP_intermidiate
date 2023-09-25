<?php

class Home
{
    public function index()
    {
        echo "This is index of " . __CLASS__ . "<br>";
    }
    public function __construct()
    {
        echo "This is constructor of " . __CLASS__ . "<br>";
    }
}
