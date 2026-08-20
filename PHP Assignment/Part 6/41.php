<?php
// Find the index of the minimum element in an array

$a = [5,10,2,14,7,9];
$min = $a[0];
$minIndex = 0;

for($i = 0; $i < count($a); $i++){
    if($a[$i] < $min){
        $min = $a[$i];
        $minIndex = $i;
    }
}

echo $minIndex;




?>