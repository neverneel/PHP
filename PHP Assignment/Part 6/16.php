<?php
// Search for a specific value in an array and print its index

$a = [2,4,13,6,12];

$temp = 9;

for($i = 0; $i < count($a); $i++){
    if($a[$i] == $temp){
        echo $i;
    } else{
            echo "the number doesn't exist";
        }
}






?>