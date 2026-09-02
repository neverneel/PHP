<?php
// Write a function findMax(...$numbers) that returns the largest of any number of values

function findMax(...$numbers){
    $max = $numbers[0];
    for($i = 0; $i < count($numbers); $i++){
        if($numbers[$i] > $max){
            $max = $numbers[$i];
        }
    }
    echo $max;
}


findMax(3,5,4,6,8,3);