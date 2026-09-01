<?php
// Print the elements of a 2D array column by column

$a = [
    [2,3],
    [4,5],
    [6,7]
];

$colCount = count($a);
    $rowCount = count($a[0]);

for($i = 0; $i < $colCount; $i++){

    for($j = 0; $j < $rowCount; $j++){
        echo $a[$j][$i];
    }
    echo "\n";
}





?>