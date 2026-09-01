<?php
// Move all duplicate values to the end of an array

$a = [2,3,2,3,5,6,7];
$dup = [];
echo "<pre>";

for($i = 0; $i < count($a); $i++){
    for($j = $i + 1; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $dup[] = $a[$j];
        }
    }
}



$nor = [];

for($i = 0; $i < count($a); $i++){
    $found = false;
    for($j = 0; $j < count($nor); $j++){
        if($a[$i] == $nor[$j]){
            $found = true;
        }
    }
    if($found == false){
        $nor[] = $a[$i];
    }
}

$finalArray = [];

for($i = 0; $i <count($nor); $i++){
    $finalArray[] = $nor[$i];
}

for($i = 0; $i < count($dup); $i++){
    $finalArray[] = $dup[$i];
}


// echo "<pre>";
print_r($nor);
print_r($dup);
print_r($finalArray);




?>