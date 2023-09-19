<?php
class test{
    public function __isset($var)
    {
        echo "'{$var}' so tr ma shi buu lay <br>";
    }
    public function __unset($var)
    {
        echo "'{$var}' so tr ma pay htrr buu lay <br>";        
    }
    public function __call($var, $arguments)
    {
        echo "'{$var}' so tk method ma shi buu lay <br>";
        echo "<pre>" . print_r($arguments) . "</pre>";        
    }
}

class Index{
    public function __call($var, $arguments)
    {
        echo "'{$var}' so tk method ma shi buu lay <br>";
        echo "<pre>" . print_r($arguments) . "</pre>";        
    }
    public static function __callStatic($name, $arguments)
    {
        echo "'{$name}' so tk method ma shi buu lay <br>";
    }
}
Index::hey();
