<?php
require_once "member.php";

// $member = new App\Member();

$rp = new ReflectionProperty('App\Member', 'detail');

showData(get_class_methods($rp));
// $rm = new ReflectionMethod('App\Member', 'getDetail');
// showData(get_class_methods($rm));

// // // $rc = new ReflectionClass('App\Member');

// // echo $rc->getShortName();
// // echo "<hr>";
// // showData(get_class_methods($rc));

function showData($A){
    echo "<pre>" . print_r($A, true) . "</pre>";
}
