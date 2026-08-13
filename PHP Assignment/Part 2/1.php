<?php
// Store a year and check if it is a leap year

$year = 2000;

echo substr($year, -3), "<br>";

if(substr($year, -2) == 00){
    if($year%400 == 0){
        echo "Leap Year";
    } else{
        echo "Not a Leap Year";
    }
} else{
    if($year%4 == 0){
        echo "Leap Year";
    } else {
        echo "Not a Leap year";
    }
}


?>