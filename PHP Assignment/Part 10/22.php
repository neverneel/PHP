<?php
// Write a function that returns multiple values using list destructuring

function value($num){
    $double = $num * 2;
    $triple = $num * 3;
    $square = $num *$num;
    $cube = $num * $num * $num;

    return [$double, $triple, $square, $cube];
}

[$double, $triple, $square, $cube] = value(10);

echo $double. "<br>";
echo $cube;







?>