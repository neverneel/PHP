<?php
// Find the largest negative number in an array

$a = [2,3,-8,-4,5,6,-3];

$num = 0;

for($i = 0; $i < count($a); $i++){
    if($a[$i] < 0){
        if($a[$i] <= -1){
            $num = $a[$i];
        }
    }
}



echo $num;







?>