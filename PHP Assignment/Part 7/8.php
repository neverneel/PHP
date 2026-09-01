<?php
// Print elements of an array in zigzag order

$a = [1,2,3,4,5,6,7,8,9];
$temp = 0;

echo "<pre>";


for($i = 1; $i < count($a) - 1; $i++){
    if($a[$i] < $a[$i + 1]){
        $temp = $a[$i];
        $a[$i] = $a[$i + 1];
        $a[$i + 1] = $temp;
    }
}


print_r($a);




?>