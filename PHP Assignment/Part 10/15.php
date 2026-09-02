<?php
// Write a function using a nullable parameter with type hinting (?int $value = null)

function checkValue(?int $value = null){
    if($value == null){
        echo "value in null";
    } else{
        echo "value is ". $value;

    }
}



checkValue(9);





?>