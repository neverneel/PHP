<?php
// Write a function sortArrayCustom($arr) implementing a simple sort algorithm (e.g. bubble sort)

function sortArrayCustom($arr){
    echo "<pre>";
    for($i = 0; $i < count($arr); $i++){
        // $count = false;
        for($j = $i + 1; $j < count($arr); $j++){
            if($arr[$i] > $arr[$j]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;

            }
        }
        
    }

    print_r($arr);
}

sortArrayCustom([8,7,5,6,3,4]);




?>