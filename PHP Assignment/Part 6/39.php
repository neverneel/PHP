<?php
// Find all pairs of elements whose difference equals a given value


$arr = [10,10,20,30,50,70];
$var = 20;

echo abs($var), "<br>";


for($i = 0; $i < count($arr); $i++){
    for($j = $i+1; $j < count($arr); $j++){
        if($arr[$j] - $arr[$i] == $var){
            echo $arr[$i], " ", $arr[$j], "<br>";
        }
    }
}



?>