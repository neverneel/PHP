<?php
// Write a function chunkArray($arr, $size) that splits an array into chunks

function chunkArray($arr, $size){
    $c1 = [];
    $c2 = [];
    echo "<pre>";

    for($i = 0; $i < $size; $i++){
        $c1[] = $arr[$i];
    }
    for($i = $size; $i < count($arr); $i++){
        $c2[] = $arr[$i];
    }

    print_r($c1);
    print_r($c2);
}

chunkArray([1,2,3,4,5], 2);




?>