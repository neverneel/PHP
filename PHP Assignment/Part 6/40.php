<?php
// Find the index of the maximum element in an array

$a = [2,10,5,14,7,9];
$max = 0;
$maxIndex = 0;

for($i = 0; $i < count($a); $i++){
    if($a[$i] > $max){
        $max = $a[$i];
        $maxIndex = $i;
    }
}

echo $maxIndex;




?>