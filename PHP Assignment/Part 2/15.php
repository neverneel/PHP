<?php
// Store a string and check if it contains a specific word using strpos()

$str = "Sic Mundus Creatus Est";

$word = strpos($str, "hello");

echo $word, "<br>";

if($word == false){
    echo "Word doesn't Exists";
} else{
    echo "Word Exists";
}

?>