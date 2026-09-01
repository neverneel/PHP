<?php
// Remove a specific value from an array by shifting elements

$a = [10,20,30,40,50];
$index = 2;

for($i = $index; $i < count($a) - 1; $i++){
    $a[$i] = $a[$i + 1];

}

unset($a[count($a) - 1]);



print_r ($a);


?>