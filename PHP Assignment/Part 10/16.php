<?php
// Write a function sumAll(...$numbers) using variadic arguments

function sumAll(...$numbers){
    $sum = 0;
    $a = [...$numbers];
    for($i = 0; $i < count($a); $i++){
        $sum = $sum + $a[$i];
    }
    echo $sum;

}

sumAll(2,3,2,5);



?>