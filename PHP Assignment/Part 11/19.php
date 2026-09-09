<?php
// Write a function arrayToCsv($arr) that converts an array into a CSV string

function arrayToCsv($arr){
    
     return implode(',',$arr);

    //return $arr;
    // echo $arr[count($arr) - 1];
}

echo arrayToCsv([1,2,3,4,5,6,7,"hello"]);




?>