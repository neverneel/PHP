<?php
// Copy all elements of one array into another array using a loop

$a = [2,4,13,6,12];

$b = [];


for($i = 0; $i < count($a); $i++){
    $b[$i] = $a[$i];
}

print_r($b);


?>