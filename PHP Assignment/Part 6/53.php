<?php
// Find elements common to two arrays without built-in functions

$arr1 = [5,10,15,20,25];
$arr2 = [2,4,6,8,10];


for($i = 0; $i < count($arr1); $i++){
    for($j = 0; $j < count($arr2); $j++){
        if($arr1[$i] == $arr2[$j]){
            echo $arr1[$i], " ", $arr2[$j], "<br>";
        }
    }
}



?>