<?php
// Write a function isLeapYear($year) that checks if a year is a leap year

function isLeapYear($year){
    echo substr($year, -3), "<br>";

    if(substr($year, -2) == 00){
        if($year % 400 == 0){
            echo "Leap";
        } else{
            echo "Not Leap";
        }
    } else{
        if($year % 4 == 0){
            echo "Leap";
        } else{
            echo "Not Leap";
        }
    }

}


isLeapYear(2024);



?>