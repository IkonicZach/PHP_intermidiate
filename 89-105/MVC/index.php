<?php
// $className = "Default";
// $methodname = "Index";

// $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
// $url = explode("/", $url);

// if (!empty($url[0])) {
//     if (file_exists(ucfirst($url[0]) . ".php")) {
//         $className = $url[0];
//     }
// }

// require_once ucfirst($className . ".php");
// $className = new $className();

// if (!empty($url[1])) {
//     $methodname = $url[1];
// }

// echo "<pre>" . print_r($url, true) . "</pre>";
// echo  $_GET['url'];
$className = "home";
$methodName = "index";
$params = [];

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : " "; //if url isn't empty, take url  // if url is empty take blank-value

$url = explode("/", $url); // parting the url with forword-slash

if (!empty($url[0])) {
    if (file_exists(ucfirst($className) . ".php")) {
        $className = $url[0];  // if url isn't empty ,take url's index-zero as class name
        // unset($url[0]);
    }
}
echo $className;
// require_once ucfirst($className) . ".php";
// $className = new $className();

// if (!empty($url[1])) {
//     if (method_exists($className, $url[1])) { // checking if url[1] exist as a real method
//         $methodName = $url[1];             // if doesn't exist as a real method , take "index" as default method
//         unset($url[1]);
//     }
// }
// $params = !empty($url) ? array_values($url) : [];
// call_user_func([$className, $methodName], $params); // $params(array) will reach to method called by $url[1] as parameters