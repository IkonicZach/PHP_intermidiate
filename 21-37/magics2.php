<?php
$A =[
    ["One", "Two", "Three", "Four"],
    ["One", "Two", "Three", "Four"],
    ["One", "Two", "Three", "Four"],
    ["One", "Two", "Three", "Four"],
    ["One", "Two", "Three", "Four"]
];
$data = serialize($A);
echo $data . "<hr>";
$normal = unserialize($data);
echo "<pre>" . print_r($normal, true) . "</pre>";
// echo print_r(, true);
?>