<?php
// Find the average of all elements in an array
$a = [2,4,13,6,12];
$sum = 0;
$count = 0;

for($i = 0; $i < count($a); $i++){
    $sum = $sum + $a[$i];
    $count = $count +1;
}

echo "average is ", $sum/$count;


?>