<?php
// Remove the element at a given index by shifting elements

$a = [10,20,30,40,50,60];
$index = 2;
$new = [];

for($i = $index; $i < count($a) - 1; $i++){
        $a[$i] = $a[$i + 1];
    
}

unset($a[count($a) - 1]);    





print_r ($a);





?>