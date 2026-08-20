<?php
// Print the elements of a 2D array (matrix) row by row

$a = [
    [2,3],
    [4,5],
    [6,7]
];

// echo "<pre>";
// foreach( $a as $ele) {
//     foreach($ele as $ele2){
//         print_r($ele2);
//     }
//     echo "<br>";
// }

$rowCount = count($a);
for($i = 0; $i < $rowCount; $i++){
    $colCount = count($a[$i]);

    for($j = 0; $j < $colCount; $j++){
        echo $a[$i][$j];
    }
    echo "\n";
}



?>