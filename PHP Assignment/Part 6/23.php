<?php
// Print all elements greater than a given value

$a = [7,4,13,6,12];

$v = 10;


for($i = 0; $i < count($a); $i++){
    if($a[$i] > $v){
        echo $a[$i], "<br>";
    }
}



?>