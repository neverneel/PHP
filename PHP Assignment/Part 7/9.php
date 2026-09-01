<?php
// Find the difference between the maximum and minimum element

$a = [3,8,6,4,7,9,2];
$max = 0;
$min = $a[0];

for($i = 0; $i < count($a); $i++){
    if($a[$i] > $max){
        $max = $a[$i];
    } elseif($a[$i] < $min){
        $min = $a[$i];
    }
}

echo $max. "<br>". $min;
echo "<br>";

$dif = $max - $min;

echo $dif;




?>