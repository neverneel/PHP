<?php
// Rotate an array right by one position

$a = [7,4,13,6,12,14];

for($i = 0; $i < count($a); $i++){
    $a[$i+1] = $a[$i];
}

print_r($a);




?>