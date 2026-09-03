<?php
// Write a function shuffleArray($arr) that randomly shuffles array elements

function shuffleArray($arr){
    shuffle($arr);
    echo "<pre>";
    print_r($arr);
}


shuffleArray([1,2,3,4,5,6,7,8,9]);





?>