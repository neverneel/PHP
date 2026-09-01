<?php
// Find the product of elements between two given indices

$a = [2,4,1,3,5,1];
$index1 = 1;
$index2 = 5;
$product = 1;


$i = $index1 + 1;

while($i < $index2){
    $product = $product * $a[$i];
    $i++;
}

echo $product;


?>