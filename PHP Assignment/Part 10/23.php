<?php
// Write a function divideWithRemainder($a, $b) returning both quotient and remainder

function divideWithRemainder($a, $b){
    $quotient = $a / $b;
    $remainder = $a %$b;

    echo "Qouotient is: ". $quotient. "and Remainder is: ". $remainder;
}



divideWithRemainder(4,2);




?>