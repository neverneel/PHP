<?php
// Write a function arrayIntersectionCustom($arr1, $arr2) without using array_intersect()

function arrayIntersectionCustom($arr1, $arr2){
    $common = [];
    echo "<pre>";


    for($i = 0; $i < count($arr1); $i++){
        for($j = 0; $j < count($arr2); $j++){
            if($arr1[$i] == $arr2[$j]){
                    $found = false;

                for($k = 0; $k < count($common); $k++){
                    if($common[$k] == $arr1[$i]){
                        $found = true;
                    }
                }
                if($found == false){
                    $common[] = $arr1[$i];
                }
            }
        }
    }


    print_r($common);
}


arrayIntersectionCustom([4,5,6,4,7,7], [1,4,6,7]);




?>