<?php
// Find the first repeated element in an array

$arr = [12,10,10,5,12,20,11];

for($i = 0; $i < count($arr);$i++){
    for($j = $i + 1 ; $j < count($arr);$j++){
        if($arr[$i] == $arr[$j]){
            echo $arr[$i]."<br>";   
            break 2;
        }
    }
}

?>