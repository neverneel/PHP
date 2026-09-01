<?php
// Write a function divide($a, $b) that returns the quotient, handling division by zero

function divide($a, $b){
    if($b == 0){
        echo "Infinity";
    } else{
        $c = $a / $b;
        echo $c;
    }
}

divide(7,0);



?>