<?php
// Write a function arrayAverageByKey($arr, $key) that averages a specific field across an array of associative arrays

function arrayAverageByKey($arr, $key){
    $sum = 0;
    $count = 0;
    foreach($arr as $ele){
        foreach($ele as $ele2 => $age){
            $sum = $sum + $ele2;
            $count++;
        }
    }

    $avg = $sum / $count;
    echo $avg;
}


arrayAverageByKey([["name" => "Alice", "age" => 20],
    ["name" => "Bob", "age" => 30],
    ["name" => "Charlie", "age" => 40]], 2);




?>