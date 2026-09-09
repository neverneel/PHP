<?php
// Create a class that stores five numbers. Find the largest, smallest, average, and sum using different methods

class Find{
    public $numbers;

    public function largest(){
        $max = $this -> numbers[1];
        for($i = 0; $i < count($this -> numbers) - 1; $i++){
            if($this -> numbers[$i] < $this -> numbers[$i + 1]){
                $max = $this -> numbers[$i + 1];
            }
        }

        echo $max. "<br>";
    }

    public function smallest(){
        $min = $this -> numbers;
        for($i = 0; $i < count($this -> numbers) - 1; $i++){
            if($this -> numbers[$i] > $this -> numbers[$i + 1]){
                $min = $this -> numbers[$i + 1];
            }
        }

        echo $min. "<br>";
    }

    public function sum(){
        $sum = 0;
        for($i = 0; $i < count($this -> numbers); $i++){
            $sum = $sum + $this -> numbers[$i];
        }

        return $sum;
    }

    public function average(){
         $sum = $this -> sum();
        // for($i = 0; $i < count($this -> numbers); $i++){
        //     $sum = $sum + $this -> numbers[$i];
        // }

        $avg = $sum / count($this -> numbers);
        echo $avg;
    }
}


$num1 = new Find();
$num1 -> numbers = [1,2,9,6,3];
$num1 -> largest();
$num1 -> smallest();
echo $num1 -> sum(). "<br>";
$num1 -> average();





?>