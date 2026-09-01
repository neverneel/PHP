<?php
// Find the least frequent element in an array using a loop

$a = [5,5,2,6,6,2,3,3,4,3];
$count = count($a);

for($i = 0; $i < count($a); $i++){
    $maxCount = 0;

    for($j = 0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $maxCount++;
        }
    }

    if($maxCount < $count){
        $count = $maxCount;
        $new = $a[$i];
    }
}

echo $new;



?>