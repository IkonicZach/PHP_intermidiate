<?php

class customException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
        $handler = fopen("log.txt", 'a');
        $data = "Error message => \n " . $message .
            "\nError number => \n " . $code . 
            "\nError timestamp\n " . 
            date("T-m-d H:m:s", time()) . 
            "\n-----------------------------------";
        fwrite($handler, $data);
        fclose($handler);
    }
}

function readFiles($file)
{
    if (!file_exists($file)) {
        throw new customException("File not found reported by My custom exception class", 10000);
    }
}

try {
    readFiles("hehe.txt");
} catch (Exception $e) {
    echo $e->getMessage();
}
