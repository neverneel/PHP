<?php
// Write a function isPalindrome($str) that checks if a string reads the same backward

function isPalindrome($str){
    $count = "";

    for($i = strlen($str) -1; $i >= 0; $i--){
        $count .= $str[$i];
    }

    $misMatch = 0;

    for($i = 0; $i < strlen($count); $i++){
        if($str[$i] != $count[$i]){
            $misMatch++;
        }
    }

    if($misMatch == 0){
        echo "String is Palindrome";
    } else{
        echo "String isnot Palindrome";
    }
    // echo $count;
}


isPalindrome("leel");




?>