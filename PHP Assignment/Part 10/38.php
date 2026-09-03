<?php
// Write a function reverseArray($arr) without using array_reverse()

function reverseArray($arr){
    $reversed = [];
    echo "<pre>";
    for($i = count($arr)-1; $i >= 0; $i--){
        $reversed[] = $arr[$i];
    }

    print_r($reversed);
}

reverseArray([1,2,3,4,5]);


?>