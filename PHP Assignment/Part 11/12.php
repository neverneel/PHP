<?php
// Write a function arrayDifferenceCustom($arr1, $arr2) without using array_diff()

function arrayDifferenceCustom($arr1, $arr2){
    $common = [];
    echo "<pre>";


    for($i = 0; $i < count($arr1); $i++){
                    $count = 0;

        for($j = 0; $j < count($arr2); $j++){

            if($arr1[$i] == $arr2[$j]){
                $count++;
            }

            
        }

        if($count == 0){
                $common[] = $arr1[$i];
            }
    }


    print_r($common);
}

arrayDifferenceCustom([1,2,3,4], [4,3,5,6]);




?>