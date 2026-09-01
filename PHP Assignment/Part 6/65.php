<?php
// Find the first non-repeated element in an array


$a = [10,9,10,12,5,12,20,11];

for($i = 0; $i < count($a); $i++){
    for($j = $i + 1; $j < Count($a); $j++){
        if($a[$i] != $a[$j]){
            echo $a[$j];
            break 2;
        }
    }
}



?>