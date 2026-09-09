<?php
// Write a function validateEmail($email) using filter_var()

function validateEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Valid";
    } else {
        echo "Not Valid";
    }
}

validateEmail("neelkamalpunj@gmail.com");


?>