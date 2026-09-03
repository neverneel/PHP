<?php
// Write a function findDuplicates($arr) that returns duplicate values

function findDuplicates($arr){
    $duplicates = [];
    echo "<pre>";
    for($i = 0; $i < count($arr); $i++){
        $count = 0;
        $found = false;
        for($j = $i + 1; $j < count($arr); $j++){
            if($arr[$i] == $arr[$j]){
                $count++;
            }

            if($count != 0){
                for($k = 0; $k < count($duplicates); $k++){
                    if($arr[$i] == $duplicates[$k]){
                        $found = true;
                    }
                }

                if($found == false){
                    $duplicates[] = $arr[$i];
                }
            }
        }
    }

    print_r($duplicates);
    echo $count;
}

findDuplicates([2,3,2,3,2,3,6,5]);




?>