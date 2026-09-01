<?php
// Find all triplets in an array that sum to zero

$a = [2,4,1,3,5,1];

for($i = 0; $i < count($a); $i++){
    for($j = $i + 1; $j < count($a); $j++){
        for($k = $j + 1; $k < count($a); $k++){
            if($a[$i] + $a[$j] + $a[$k] == 7){
                echo $a[$i]. " ".$a[$j]. " ".$a[$k]. "<br>";            
            }
        }
    }
}




?>