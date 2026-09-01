<?php
// Find all duplicate numbers in an array

$a = [2,5,2,3,2,5,4,6];
$b = [];
echo "<pre>";


for($i = 0; $i < count($a); $i++){
    $count = 0;
    for($j = 0; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $count++;
        }
    }
    if($count != 1){
        $present = false;
        
        for($k = 0; $k < count($b); $k++){
            if($a[$i] == $b[$k]){
                $present = true;
            }
        }

        if($present == false){
            $b[] = $a[$i];
        }
    }
}

print_r($b);





?>