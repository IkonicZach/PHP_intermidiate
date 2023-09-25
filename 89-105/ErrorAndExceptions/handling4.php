<?php
class MyErrorClass extends Exception
{
}
function MyHandler($erNum, $erMessage)
{
    throw new Exception("Include not working. Error number: " . $erNum . "<br>" . $erMessage);
}

set_error_handler("MyHandler");

try {
    include "Hell.php";
} catch (Exception $e) {
    echo $e->getMessage();
}
