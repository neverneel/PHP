<?php
// Write a function that returns null when no valid result exists

function divide($a, $b){
    if($b == 0){
        return null;
    }

    $result = $a / $b;
    echo $result;
}

divide(4,6);




?>