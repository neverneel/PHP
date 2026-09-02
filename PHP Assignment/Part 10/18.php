<?php
// Write a function averageOf(...$numbers) that computes the average of variadic arguments

function averageOf(...$numbers){
    $sum = 0;
    for($i = 0; $i < count($numbers); $i++){
        $sum = $sum + $numbers[$i];
    }

    $avg = $sum / count($numbers);
    echo $avg;
}


averageOf(3,3,3,4);




?>