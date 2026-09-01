<?php
// Find the element that appears an even number of times

$a = [2,5,2,3,2,5,4,6];
$b = [];
echo "<pre>";


for($i = 0; $i < count($a); $i++){
    $count = 0;
    for($j =0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $count++;
        }
    }
    if($count % 2 == 0 && $count > 1){
        $b[] = $a[$i];
    }
}

print_r($b);




?>