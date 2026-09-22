<?php
// Create a class with method chaining. Allow multiple methods to be called in a single statement

class Operation{
    public $num1;
    public $num2;
    public $result;

    public function sum(){
        $this -> result = $this -> num1 + $this -> num2;
        echo $this -> result. "<br>";
        return $this;
    }
    public function subtract(){
        $this -> result = $this -> num1 - $this -> num2;
        echo $this -> result. "<br>";
        return $this;
    }
    public function multiply(){
        $this -> result -> num1 * $this -> num2;
        echo $this -> result. "<br>";
        return $this;
    }

    public function display(){
        echo $this -> result;
    }
}

$op = new Operation();
$op -> num1 = 10;
$op -> num2 = 5;
$op -> sum() -> subtract();




?>