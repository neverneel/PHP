<?php
// Write a function getMinMax($arr) that returns both the min and max as an array

function getMinMax($arr){
    $max = $arr[0];
    $min = $arr[0];
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] > $max){
            $max = $arr[$i];
        }
        if($arr[$i] < $min){
            $min = $arr[$i];
    }
    }
    echo $max. "<br>". $min;
}


getMinMax([2,8,9,6,4]);




?>