<?php
// Write a function that accepts a mixed number of arguments using func_get_args()

function sumAllNumbers(){
    $values = func_get_args();
    $sum = 0;

    for($i = 0; $i < count($values); $i++){
        $sum = $sum + $values[$i];
    }
    echo $sum;
}



sumAllNumbers(5,5,5);






?>