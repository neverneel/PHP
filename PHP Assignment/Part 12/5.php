<?php
// Create a class that stores a matrix. Implement addition, subtraction, and multiplication of two matrices

class Arithmetic{
    public $matrix1;
    public $matrix2;

    public function addition(){
        $final = [];
        echo "<pre>";
        for($i = 0; $i < count($this -> matrix1); $i++){
            for ($j = 0; $j < count($this -> matrix2); $j++){
                $final[$i][$j] = $this -> matrix1[$i][$j] + $this -> matrix2[$i][$j];
            }
        }

        print_r($final);
    }

    public function subtraction(){
        $final = [];

        for($i = 0; $i < count($this -> matrix1); $i++){
            for($j = 0; $j < count($this -> matrix2); $j++){
                $final[$i][$j] = $this -> matrix1[$i][$j] - $this -> matrix2[$i][$j];
            }
        }

        print_r($final);
    }

    public function multiplication(){
        $final = [];
        for($i = 0; $i < count($this -> matrix1); $i++){
            for($j = 0; $j < count($this -> matrix2); $j++){
                $final[$i][$j] = $this -> matrix1[$i][$j] * $this -> matrix2[$j][$i];
            }
        }

        print_r($final);
    }
}


$matrix = new Arithmetic();
$matrix -> matrix1 = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];


$mmatrix = new Arithmetic();
$matrix -> matrix2 = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$matrix -> addition();
$matrix -> subtraction();
$matrix -> multiplication();




?>