<?php
// Find the largest element in a 2D array


$a = [
    [2,3],
    [4,10],
    [6,7]
];

$max = 0;

foreach($a as $ele){
    foreach($ele as $ele2){
        if($ele2 > $max){
            $max = $ele2;
        }
    }
}

echo $max;



?>