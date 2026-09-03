<?php
// Write a function daysInMonth($month, $year) that returns the number of days in a month

function daysInMonth($month, $year){
    $leap = false;

    if(substr($year, -2) == 00){
        if($year % 400 == 0){
            $leap = true;
        }
    } else{
        if($year % 4 == 0){
            $leap = true;
        }
    }
    if($leap == true){
        if($month % 2 != 0 || $month == 8 || $month == 1){
            echo "31 Days";
        } else if($month % 2 == 0 && $month != 2 ){
         echo "30 Days";
        } else if($month == 2){
            echo "29 Days";
        }
    } else {
        if($month % 2 != 0 || $month == 8){
            echo "31 Days";
        } else if($month % 2 == 0 && $month != 2 ){
         echo "30 Days";
        } else if($month == 2){
            echo "28 Days";
        }
    }
}


daysInMonth(9, 2024);




?>