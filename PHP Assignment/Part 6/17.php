<?php
// Check if a value exists in an array and print true or false

$a = [2,4,13,6,12,88,5,5,2,7,9,15,45];
$temp = 15;

for($i = 0; $i < count($a); $i++){
    if($a[$i] == $temp ){
        echo $a[$i]."true"."<br>";
    }else{
        echo "false"."<br>";
    }
}





?>