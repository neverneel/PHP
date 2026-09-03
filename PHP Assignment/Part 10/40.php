<?php
// Write a function mergeArrays($arr1, $arr2) that combines two arrays without duplicates

function mergeArrays($arr1, $arr2){
    $final = [];
    echo "<pre>";
    for($i = 0; $i < count($arr1); $i++){
            $found = false;

        
                for($k = 0; $k < count($final); $k++){
                    if($arr1[$i] == $final[$k]){
                        $found = true;
                    }
                }
            
        if($found == false){
                $final[] = $arr1[$i];
            }
    }


    for($i = 0; $i < count($arr2); $i++){
            $found = false;

        
                for($k = 0; $k < count($final); $k++){
                    if($arr2[$i] == $final[$k]){
                        $found = true;
                    }
                }
            
        if($found == false){
                $final[] = $arr2[$i];
            }
    }


    print_r($final);
}

mergeArrays([2,3,2,5,3,6,8],[12,11,10,12,11]);








// for($i = 0; $i < count($arr2); $i++){
//             $present = false;

//         for($j = $i +1; $j < count($arr2); $j++){
//             if($arr2[$i] != $arr2[$j]){
//                 for($k = 0; $k < count($final); $k++){
//                     if($arr2[$i] == $final[$k]){
//                         $present = true;
//                     }
//                 }
//             }
//         }
//         if($present == false){
//                 $final[] = $arr2[$i];
//             }
//     }







?>
