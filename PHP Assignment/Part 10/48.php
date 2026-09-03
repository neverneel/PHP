<?php
// Write a function that throws and catches an exception for invalid input

function checkEven($n){
    if($n % 2 != 0){
        throw new Exception("odd number");
    }

    return "number is even";
}

try{
    echo checkEven(9);
}
catch(Exception $e){
    echo "error: ". $e -> getMessage();
}



?>