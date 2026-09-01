<?php
// Count occurrences of each element in an array

$a = [2,3,2,4,3,2,6];
$count = 0;

for($i = 0; $i < count($a); $i++){
    $maxCount = 0;
    for($j = 0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $maxCount++;
            
        }
    }
    echo $maxCount, "<br>";
}





?>