<?php
// Write a function binarySearch($arr, $target) that searches a sorted array

function binarySearch($arr, $target){
    $start = 0;
    $end = count($arr) - 1;

    for($i = $start; $i <= $end; $i++){
        $mid = ceil($end + $start) / 2;

        if($mid == $target){
            echo $mid;
        }

        if($mid < $target){
            $start = $mid;
        }

        if($mid > $target){
            $end = $mid;
        }
    }

    // echo $mid;
}

binarySearch([1,2,3,4,5,6,7,8,9,10], 4);



// function binarySearch($target){
//     $arr = [1,2,3,4,5,6,7,8,9,10];

//     $midPoint = count($arr)/2;

//     for($i = 0;  $i < $midPoint;$i++){
//         if($target == $arr[$i]){
//             echo "fount the target : " . $i;
//         }
//     }
//     echo "<br>";
//     for($j = count($arr)-1;  $j > $midPoint;$j--){
//         if($target == $arr[$j]){
//             echo "found target : ". $j;
//         }
//     }
// }
// binarySearch(8);



?>