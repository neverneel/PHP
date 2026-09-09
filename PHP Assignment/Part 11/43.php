<?php
// Write a function sumMatrix($matrix) that adds up all values in a 2D array

function sumMatrix($matrix){
    $sum = 0;
    foreach($matrix as $ele){
        foreach($ele as $ele2){
            $sum = $sum + $ele2;
        }
    }
    echo $sum;
}

sumMatrix([[1,2],[3,4]]);



?>