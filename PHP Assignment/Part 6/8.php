<?php
// Find the product of all elements in an array using a loop
$a = [2,4,3,6,8];

$p = 1;

for($i = 0; $i < count($a); $i++){
    $p = $p * $a[$i];
}

echo $p;



?>