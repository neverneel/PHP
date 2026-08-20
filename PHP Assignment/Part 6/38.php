<?php
// Find all pairs of elements that sum to a given target

$arr = [10,10,20,30,50,70];
$var = 80;


for($i = 0; $i < count($arr); $i++){
    for($j = $i + 1; $j < count($arr); $j++){
        if($arr[$i] + $arr[$j] == $var){
            echo $arr[$i], " ", $arr[$j], "<br>";
        }
    }
}



?>