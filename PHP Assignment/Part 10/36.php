<?php
// Write a function sumArray($arr) that totals all elements

function sumArray($str){
    $sum = 0;
    for($i = 0; $i < count($str); $i++){
        $sum = $sum + $str[$i];
    }
    echo $sum;
}


sumArray([2,3,2]);



?>