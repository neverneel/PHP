<?php
// Find the sum of elements between two given indices

$a = [2,4,1,3,5,1];
$index1 = 1;
$index2 = 5;
$sum = 0;

// for($i = $index1 + 1; $i < $index2; $i++){
//     $sum = $sum + $a[$i];
// }


// with while loop

$i = $index1 + 1;

while($i < $index2){
    $sum = $sum + $a[$i];
    $i++;
}


echo $sum;




?>