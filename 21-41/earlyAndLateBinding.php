<?php
class One
{
    public function className()
    {
        return __CLASS__;
    }
    public function getClassName()
    {
        echo self::className();
    }
}
class Two extends One
{
    public function className()
    {
        return __CLASS__;
    }
}
$two = new Two();
$two->getClassName();
