<?php
// Write a function returning a closure (a function that returns another function)

function greeter($name){
    $greeting = function() use ($name){
    echo "Hello ".$name;
    };
    return $greeting;
}


$greet = greeter("neel");

echo $greet();




?>