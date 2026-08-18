<?php
// Find the second largest element in an array

$a = [2,4,13,6,12];
$max = 0;

for($i = 0; $i < count($a); $i++){
    if($a[$i] > $max){
        $max = $a[$i];
    }
}

echo $max, "<br>";

$max2 = 0;
for($i = 0; $i < count($a); $i++){
    if($a[$i] < $max){
        if($a[$i] > $max2){
            $max2 = $a[$i];
        }
    }
}

echo $max2;




?>