<?php
// Partition an array around a pivot (like in quicksort)


$a = [1,2,3,5,6,8,4,9];
$part1 = [];
$part2 = [];

$pivot = 4;

echo "<pre>";


// for($i = 0; $i < count($a); $i++){
//     if($a[$i] < $pivot){
//         $part1[] = $a[$i];
//     }else{
//         $part2[] = $a[$i];
//     }
// }

for($i = 0; $i < $pivot; $i++){
    $part1[] = $a[$i];
}

for($i = $pivot; $i < count($a); $i++){
    $part2[] = $a[$i];
}




print_r($part1);
print_r($part2);






?>