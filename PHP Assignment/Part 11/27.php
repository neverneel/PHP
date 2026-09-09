<?php
// Write a function isAnagram($str1, $str2) that checks if two strings are anagrams

function isAnagram($str1, $str2){
    if(strlen($str1) != strlen($str2)){
        echo "not anagram";
    }

    for($i = 0; $i < strlen($str1); $i++){
            $count = 0;

        for($j = 0; $j < strlen($str2); $j++){
            if($str1[$i] != $str2[$j]){
                $count++;
            }
        }
    }
    if($count == 1){
            echo "Anagram";
        } else if($count == 0){
            echo "Not Anagram";
        } else {
            echo "Anagram";
        }
}

isAnagram("raat", "taara");



?>