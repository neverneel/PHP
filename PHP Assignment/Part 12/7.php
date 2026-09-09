<?php
// Create a class representing a fraction. Perform addition, subtraction, multiplication, and division between two fraction objects

class Find{
    public $num;
    public $den;


    public function addition($fraction){
        $result = (($this -> num * $fraction -> den) + ($fraction -> num * $this -> den)) / ($this -> den * $fraction -> den);
        echo $result. "<br>";
    }

    public function subtraction($fraction){
        $result = (($this -> num * $fraction -> den) - ($fraction -> num * $this -> den)) / ($this -> den * $fraction -> den);
        echo $result. "<br>";
    }

    public function multiplication($fraction){
        $result = (($this -> num * $fraction -> num) / ($fraction -> den * $this -> den));
        echo $result. "<br>";
    }

    public function division($fraction){
        $result = (($this -> num * $fraction -> den) / ($fraction -> num * $this -> den));
        echo $result;
    }
}


$fraction1 = new Find();
$fraction1 -> num = 2; 
$fraction1 -> den = 3; 

$fraction2 = new Find();
$fraction2 -> num = 3; 
$fraction2 -> den = 2; 

$fraction1 -> addition($fraction2);
$fraction2 -> subtraction($fraction1);
$fraction2 -> multiplication($fraction1);
$fraction1 -> division($fraction2);




?>