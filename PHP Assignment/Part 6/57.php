<?php
// Compute the running average at each position in an array

$a = [1,2,3,4];

$sum = 0;

for($i = 0; $i < count($a); $i++){
    $sum = $sum + $a[$i];
    $c[] = $sum / ($i + 1); 
}


print_r($c);

?>