<?php
// Write a function countVowels($str) that counts vowels in a string

function countVowels($str){
    $vowels = ["a","e","i","o","u"];
    $count = 0;

    for($i = 0; $i < strlen($str); $i++){
        if(in_array($str[$i], $vowels)){
            $count++;
        }
    }
    echo $count;
}


countVowels("hamilton");




?>