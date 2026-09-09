<?php
// Write a function removeDuplicates($arr) without using array_unique()

function removeDuplicates($arr){
    $final = [];
    echo "<pre>";
    for($i = 0; $i < count($arr); $i++){
        $present = false;
        for($j = 0; $j < count($final); $j++){
            if($arr[$i] == $final[$j]){
                $present = true;
            }  
        }
        if($present == false){
                $final[] = $arr[$i];
            }
        }
        print_r($final);
    }




removeDuplicates([2,3,4,2,4,6,8]);




?>