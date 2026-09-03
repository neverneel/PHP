<?php
// Write a function using named arguments (PHP 8+), e.g. createUser(name: "Alice", age: 30)

function createUser($name, $age){
    echo $name. " is ". $age;
}

createUser(age: 30, name: "Alice");







?>