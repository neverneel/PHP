<?php
// Count the number of zeros in an array

$a = [-1,2,-3,4,5,-6,8,0,0,0,0,0,0,0];
$count = 0;


$i = 0;

while($i < count($a)){
    if($a[$i] == 0){
        $count++;
    }
    $i++;
}

echo $count;



?>


