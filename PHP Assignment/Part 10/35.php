<?php
// Write a function wordCount($str) that counts the number of words

function wordCount($str){
    $count = 0;
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == " "){
            $count++;
        }
    }
    echo $count + 1;
}

wordCount("hello world, I'm Neel Kamal");


?>