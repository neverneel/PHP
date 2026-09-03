<?php
// Write a function removeSpaces($str) that removes all whitespace

function removeSpaces($str){
    $new = "";
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == " "){
            $str[$i] == "";
        } else {
            $new .= $str[$i];
        }
    }
    echo $new;
}

removeSpaces("hello world");


?>