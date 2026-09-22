<?php
// Find the least frequent element in an array using a loop

$a = [5,5,2,6,6,2,3,3,4,3,5];
// $count = count($a);
$new = [];

for($i = 0; $i < count($a); $i++){
    $maxCount = 0;

    for($j = 0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $maxCount++;
        }
    }

    if($maxCount < 1){
        // $count = $maxCount;
        $new = $a[$i];
    }
}

print_r($new);



?>