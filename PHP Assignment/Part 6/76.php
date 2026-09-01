<?php
// Check if a sub-array with a given sum exists

$a = [4,5,6,1,9,3,7];
$sumArr = [];
$pot = [];


$sum = 10;
echo "<pre>";
for($i = 0; $i < count($a); $i++){
    for($j = $i + 1; $j < count($a); $j++){
        if($a[$i] + $a[$j] == $sum){
            $sumArr[] = [$a[$i], $a[$j]];
        } elseif($a[$i] + $a[$j] < $sum){
            $pot[] = [$a[$i], $a[$j]];
        }
    }
}

print_r ($sumArr);
echo "<br>";
print_r ($pot);


?>