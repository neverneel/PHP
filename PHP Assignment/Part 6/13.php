<?php
// Print all odd numbers from an array

$a = [2,4,13,3,12];

for($i = 0; $i < count($a); $i++){
    if($a[$i]%2 != 0){
        echo $a[$i], ", ";
    }
}





?>