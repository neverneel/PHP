<?php
// Swap two elements at given positions in an array


$a = [2,4,13,6,12];
$temp = null;


$temp = $a[1];
$a[1] = $a[2];
$a[2] = $temp;

print_r ($a);


?>