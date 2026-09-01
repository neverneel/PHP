<?php
// Rearrange an array in alternating positive and negative number

$a = [2,3,-8,-4,-1,5,6];
$pos = [];
$neg = [];
$finalArray = [];

echo "<pre>";

for($i = 0; $i < count($a); $i++){
    if($a[$i] > 0){
        $pos[] = $a[$i];
    } else{
        $neg[] = $a[$i];
    }
}

$posIndex = 0;
$negIndex = 0;

for($j = 0; $j < count($a); $j++){
    if($j % 2 == 0){
        $finalArray[] = $pos[$posIndex];
        $posIndex++;
    } else{
        $finalArray[] = $neg[$negIndex];
        $negIndex++;
    }
}



print_r($pos);
print_r($neg);
print_r($finalArray);







?>