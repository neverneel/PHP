<?php
// Count how many odd numbers exist in an array

$a = [2,4,13,6,12];

$count = 0;

for($i = 0; $i < count($a); $i++){
    if($a[$i]%2 != 0){
        echo $a[$i], "<br>";
        $count = $count +1;
    }

    
}

echo "No. of even elements are ", $count;







?>