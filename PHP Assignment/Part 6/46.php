<?php
// Find the sum of each row in a 2D matrix

$a = [
    [2,3],
    [4,10],
    [6,7]
];

$row = [];

$sum = 0;

// echo "<pre>";
// foreach($a as $ele){
//     $sum =0;
    
//     foreach($ele as $ele2){
//         $sum +=$ele2;

//     }
//     $row[] = $sum;
// }
// print_r($row);

for($i = 0; $i < count($a); $i++){
    for($j = 0; $i < count($a[$i]); $j++){
        $sum = $a[$i] + $a[$j];
        $row = $sum;
    }
}

print_r($row);




?>