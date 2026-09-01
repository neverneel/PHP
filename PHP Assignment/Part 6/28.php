<?php
// Remove duplicate values from an array using a loop

$array = [1, 2, 3, 4, 2, 5, 3];
$finalArray = [];
echo "<pre>";

for ($i = 0; $i < count($array); $i++) {
    $found = false;
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] == $array[$j]) {
            $found = true;
        }
    }
    if($found == false){
        $finalArray[] = $array[$i];
    }
}

print_r($finalArray);


?>