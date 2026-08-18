<?php
// Find the minimum value in an array using a loop

$a = [2,4,13,6,12];

$min = $a[0];

for($i = 0; $i < count($a); $i++){
    if($a[$i] < $min){
        $min = $a[$i];
    }
}

echo $min;

?>