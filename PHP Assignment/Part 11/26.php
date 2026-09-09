<?php
// Write a function countOccurrences($str, $char) that counts how many times a character appears

function countOccurrences($str, $char){
    $count = 0;
    $str = strtolower($str);
    $char = strtolower($char);

    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == $char){
            $count++;
        }
    }

    echo $count. " times";
}

countOccurrences("Elephant", "E");



?>