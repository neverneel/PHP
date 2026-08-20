<?php
// Shift all zeros to the beginning of an array

$a = [2,0,5,6,0,8,0,0,9];
$c = [];

for($i = 0; $i < count($a); $i++){
    if($a[$i] == 0){
        $c[] = $a[$i];
    }
}

for($i = 0; $i < count($a); $i++){
    if($a[$i] != 0){
        $c[] = $a[$i];
    }
}


print_r($c);


?>