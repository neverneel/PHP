<?php
// Write a recursive function factorial($n)

function factorial($n){
    $a = [];

    for($i = 0; $i < $n; $i++){
        $a[] = $n - $i;
    }

    $mul = 1;

    for($i = 0; $i < count($a); $i++){
        $mul = $mul * $a[$i];
    }

    echo $mul;

}



factorial(4);




?>