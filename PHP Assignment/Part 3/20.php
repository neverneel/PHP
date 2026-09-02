<?php
// Store a string and check if it is a palindrome using string variables


$str = "namanl";
$count = "";

    for($j = strlen($str)-1; $j >= 0;$j--){
        $count .= $str[$j];
    }
    echo $count;


    $misMatch = 0;

    for($i = 0; $i < strlen($count); $i++){
        if($str[$i] != $count[$i]){
            $misMatch++;
        }
    }


    if($misMatch == 0){
        echo "string is palindrome";
    } else{
        echo "string is not palindrome";
    }


?>