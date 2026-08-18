<?php
// Print all elements of an array in reverse order using a loop

$a = [45,5,8,1,2];

for($i = 0; $i<= count($a); $i++){
    echo $a[count($a)-$i], "<br>";
}



?>