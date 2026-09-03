<?php
// Write a closure that captures an outer variable using use ($var)

$var = 3;

$square = function() use($var){
    $result = $var * $var;
    echo $result;
};

$square();



?>