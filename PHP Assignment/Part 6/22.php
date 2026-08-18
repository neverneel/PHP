<?php
// Find the second smallest element in an array

$a = [7,4,13,6,12];
$min = $a[0];


for($i = 0; $i < count($a); $i++){
    if($a[$i] < $min){
        $min = $a[$i];
    }
}

echo $min, "<br>";

$min2 = $a[0];
for($i = 0; $i < count($a); $i++){
    if($a[$i] > $min){
        if($a[$i] < $min2){
            $min2 = $a[$i];
        }
    }
}

echo $min2;




?>