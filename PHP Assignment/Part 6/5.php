<?php
// Count the number of elements in an array using a loop

$a = [8,55,48,6,9];
$count = 0;

for($i = 0; $i < count($a); $i++){
    $count = $count+1;
}

echo $count;


?>