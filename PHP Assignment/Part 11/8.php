<?php
// Write a function calculateAge($birthYear) that returns a person's age

function calculateAge($birthYear){
    $age = date('Y') - $birthYear;
    return $age;
}



echo calculateAge(2001);





?>