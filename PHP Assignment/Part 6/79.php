<?php
// Flatten a 2D array into a 1D array using nested loops

$a = [
    [2,1],
    [3,2]
];

$b = [];


foreach($a as $ele){
    foreach($ele as $ele2){
        $b[] = $ele2;
    }
}

print_r($b);



?>