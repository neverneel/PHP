<?php
// Compute the cumulative sum array from a given array

$a = [1,2,3,4];
$sum =0;
for($i = 0; $i < count($a); $i++){
    $sum = $sum + $a[$i];
    echo $sum, "<br>";
    $c[] = $sum;
}

print_r($c);


?>