<?php
// Write a function slugify($str) that converts a string into a URL-friendly slug

function slugify($str){
    $special = "!@#$%^&*\?/";
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == " "){
            $str[$i] = "-";
        }
    }
    
    for($i = 0; $i < strlen($str); $i++){
        for($j = 0; $j < strlen($special); $j++){
        if($str[$i] == $special[$j]){
                $str[$i] = " ";
            }
        }
    }
        $str = strtolower($str);
    echo $str;
    }
    


slugify("Neel Kamal! Punj");



?>