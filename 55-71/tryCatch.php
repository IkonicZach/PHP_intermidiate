<?php
error_reporting(0);
function CustomErrorHandler(){
    throw new Exception("File doesn't exist");
}
set_error_handler("CustomErrorHandler");
try {
    if(fopen('tsst.txt', 'r')){
        echo "Successful";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}finally{
    echo "FINALLY!!!!";
}
?>