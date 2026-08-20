<?php
// Rotate an array left by one position

$a = [7,4,13,6,12,14];
$l = count($a);


if($l > 1){
    $firstElement = $a[0];

    for($i = 0; $i < $l - 1; $i++){
    $a[$i] = $a[$i + 1];
    }

    $a[$l - 1] = $firstElement;
}

print_r($a);

?>