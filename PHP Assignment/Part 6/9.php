<?php
// Find the maximum value in an array using a loop


$a = [2,4,13,6,12];
// $sum = 0;

// for($i = 0; $i < count($a); $i++){
//     $sum = $sum + $a[$i];
// }


// $fsum = $sum;

// for($i = 0; $i < count($a); $i++){
//     if($fsum / $a[i])
// }

$max = 0;
for($i=0; $i<count($a); $i++) {
    if($a[$i] > $max) {
        $max = $a[$i];
    }
    
    
}

echo $max;

?>