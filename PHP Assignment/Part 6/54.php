<?php
// Find elements in the first array that are not in the second array
$arr1 = [5,10,15,20,25];
$arr2 = [2,4,6,8,10];


for($i = 0; $i < count($arr1); $i++){
    
    for($j = 0; $j < count($arr2); $j++){
        $found = [];
        if($arr1[$i] != $arr2[$j]){
            $found [] = $arr1[$i];
            // echo $arr1[$i], "<br>";
        }
        
    }
    echo "<pre>";
print_r($found);
   
}



?>