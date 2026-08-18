<?php
// Merge two arrays into one using a loop

$a = [2,4,6,8];
$b = [1,3,5,7,9];
$c = [];


for($i = 0; $i < count($a); $i++){
    $c[] = $a[$i];
}

for($i = 0; $i < count($b); $i++){
    $c[] = $b[$i];
}

print_r($c);




?>