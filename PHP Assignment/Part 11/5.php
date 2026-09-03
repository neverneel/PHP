<?php
// Write a function fahrenheitToCelsius($f) that converts temperature units

function fahrenheitToCelsius($f){
    $c = ($f - 32) / 1.8;
    return $c;
}


echo fahrenheitToCelsius(98.6);




?>