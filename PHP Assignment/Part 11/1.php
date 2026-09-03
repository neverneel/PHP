<?php
// Write a function isPrime($n) that checks whether a number is prime

function isPrime($n){
    if($n % $n == 0 && $n % 2 != 0){
        return "is prime";
    }

    return "not prime";
}


echo isPrime(33);





?>