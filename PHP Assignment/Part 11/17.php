<?php
// Write a function linearSearch($arr, $target) that searches an unsorted array

function linearSearch($arr, $target){
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == $target){
            echo "Target ". $target. " is present at index ". $i;;
        }
    }
}

linearSearch([1,2,3,4,5,6,7,8], 6);



?>