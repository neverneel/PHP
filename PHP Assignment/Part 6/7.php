<?php
// Find the sum of all elements in an array using a loop

$a = [1,2,56,4,3];
$sum = 0;

for($i = 0; $i < count($a); $i++){
    $sum = $sum + $a[$i];
}
echo $sum;

?>