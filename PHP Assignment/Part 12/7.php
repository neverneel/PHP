<?php
// Create a class representing a fraction. Perform addition, subtraction, multiplication, and division between two fraction objects

class Find{
    public $num;
    public $den;


    public function addition(){
        $num1 = $this -> fraction1 -> num / $this -> fraction1 -> den;
        echo $num1;
    }
}


$fraction1 = new Find();
$fraction1 -> num = 2; 
$fraction1 -> den = 3; 

$fraction2 = new Find();
$fraction2 -> num = 3; 
$fraction2 -> den = 2; 

$fraction1 -> addition();




?>