<?php
// Write a function filterEvens($arr) that returns only even numbers

function filterEvens($arr){
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] % 2 == 0){
            echo $arr[$i], "<br>";
        }
    }
}


filterEvens([2,3,5,6,4]);



?>