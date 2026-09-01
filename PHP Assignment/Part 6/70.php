<?php
// Print elements of an array at even indices

$a = [10,20,30,40,50];


for($i = 0; $i < count($a); $i++){
    if($i % 2 == 0){
        echo $a[$i]. "<br>";
    }
}





?>