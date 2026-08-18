<?php 
// Swap the first and last elements of an array

$a = [2,4,13,6,12];
$temp = null;


$temp = $a[0];
$a[0] = $a[count($a) - 1];
$a[count($a) - 1] = $temp;

print_r($a);

// echo count($a);




?> 