<?php
// Write a function validatePhoneNumber($number) using a regular expression

function validatePhoneNumber($number){
    if(preg_match("/^[6-9][0-9]{9}$/", $number)){
        echo "Valid";
    } else {
        echo "Not Valid";
    }
}

validatePhoneNumber("5612375000");




?>