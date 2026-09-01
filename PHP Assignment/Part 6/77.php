<?php
// Count the number of inversions in an array

$a = [2,4,1,3,5];


for($i = 0; $i < count($a); $i++){
    for($j = $i + 1; $j < count($a); $j++){
        if($i < $j){
            if($a[$i] > $a[$j]){
                echo $a[$i]." ".$a[$j]."<br>";
            }
        }
    }
}






?>