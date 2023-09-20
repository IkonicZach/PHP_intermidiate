<?php

function dooo(...$var){
    echo $var[0] ?? "HEHE";
}

dooo("one");