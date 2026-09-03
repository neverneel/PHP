<?php
// Write a function generateRandomPassword($length) that returns a random string

function generateRandomPassword($length){
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
    $password = "";

    for($i = 0; $i < $length; $i++){
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    echo $password;

}


generateRandomPassword(8);




?>