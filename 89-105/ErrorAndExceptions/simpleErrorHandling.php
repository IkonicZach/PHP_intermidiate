<?php

function myFileRead($file)
{
    if (file_exists($file)) {
        $handler = fopen($file, 'r');
        $size = filesize($file);
        $data = fread($handler, $size);

        echo $data;
    }else{
        throw new Exception("File doesn't exist.");
    }
}

try {
    myFileRead("hell.txt");
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
    echo $e->getCode() . "<br>";
    echo $e->getFile() . "<br>";
    echo $e->getTraceAsString() . "<br>";
}
