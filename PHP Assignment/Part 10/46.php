<?php
// Write a function with strict type declarations (declare(strict_types=1);) that only accepts integers
declare(strict_types=1);

function addNumbers(float $a, float $b){
    $result = (int) ($a + $b);
    echo $result;
}


addNumbers(1.5, 1.5);



?>