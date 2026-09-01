<?php
// Find the smallest positive number in an array

$a = [2,3,-8,-4,5,6,-3,10];

$num = 0;

for($i = 0; $i < count($a) - 1; $i++){
    if($a[$i] > 0){
        if($a[$i] > $a[$i + 1]){
            $num = $a[$i + 1];
        }
    }
}



echo $num;






?>