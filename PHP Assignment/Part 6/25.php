<?php
// Count how many elements are greater than the average

$a = [7,4,13,6,12,14];

$sum = 0;

for($i = 0; $i < count($a); $i++){
    $sum = $sum + $a[$i];
}

echo $sum, "<br>";
$avg = $sum / count($a);
echo $avg, "<br>";

for($i = 0; $i < count($a); $i++){
    if($a[$i] > $avg){
        echo $a[$i], "<br>";
    }
}




?>