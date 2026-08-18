<?php
// Store an array of 5 numbers in a variable and find the sum

$arr = [1,2,3,4,5];
$sum = 0;
for($i = 0; $i < count($arr) ; $i++){
    $sum = $sum + $arr[$i]; 
    
}

echo $sum;

?>