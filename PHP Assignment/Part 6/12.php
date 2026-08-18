<?php
// Print all even numbers from an array

$a = [2,4,13,6,12];

for($i = 0; $i < count($a); $i++){
    if($a[$i]%2 == 0){
        echo $a[$i], ", ";
    }
}


?>