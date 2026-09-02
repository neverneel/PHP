<?php
// Write a function concatenateStrings(...$strings) that joins any number of strings

function concatenateStrings(...$strings){
    $final = "";
    for($i = 0; $i < count($strings); $i++){
        $final .= $strings[$i];
    }
    echo $final;
}

concatenateStrings("hello ","world")



?>