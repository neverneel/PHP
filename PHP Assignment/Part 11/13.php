<?php
// Write a function flattenArray($arr) that flattens a nested array

function flattenArray($arr){
    $final = [];
    echo "<pre>";
   foreach($arr as $ele){
    foreach($ele as $ele2){
        $final[] = $ele2;
        }
   }

    print_r($final);
}

flattenArray([[1,2,3], [4,5,6]]);



?>