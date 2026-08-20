<?php
// Count occurrences of each element in an array

$a = [2,3,2,4,3,2,6];
$o = 0;

for($i = 0; $i < count($a); $i++){
    for($j = $i +1; $j < count($a); $j++){
        if($a[$i] == $a[$j]){
            $o = $a[$i];
            // $o++;
        }
    }
    echo $o, "<br>";
}





?>