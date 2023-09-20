<?php
class In
{
    private static $name = "THU";
    private static $instance;

    private function __construct()
    {
        self::$name = "CHHHHHHHHH";
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new In();
        }
        return self::$instance;
    }
    public function getName()
    {
        return self::$name;
    }
}
$obj = In::getInstance();
echo $obj->getName();
?>
