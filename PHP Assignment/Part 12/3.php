<?php
// Create a class that stores an array of integers. Find duplicate, unique, even, and odd numbers

class Find{
    public $numbers;

    public function duplicate(){
        $final = [];
        echo "<pre>";
        for($i = 0; $i < count($this -> numbers); $i++){
            $found = false;
            for($j = $i + 1; $j < count($this -> numbers); $j++){
                if($this -> numbers[$i] == $this -> numbers[$j]){
                    $found = true;
                }
            }
            if($found == true){
                $present = false;

                for($k = 0; $k < count($final); $k++){
                    if($final[$k] == $this -> numbers[$i]){
                        $present = true;
                    }
                }
                if($present == false){
                        $final[] = $this -> numbers[$i];
                    }
            }
        }

        print_r($final);
    }


    public function unique(){
        $final = [];
        echo "<pre>";
        for($i = 0; $i < count($this -> numbers); $i++){
            $found = false;
            $count = 0;
            for($j = 0; $j < count($this -> numbers); $j++){
                if($this -> numbers[$i] == $this -> numbers[$j]){
                    $count++;
                }
            }
            if($count < 2){
                $final[] = $this -> numbers[$i];
            }
        }

        print_r($final);
    }

    public function even(){
        $final = [];
        $count = 0;
        for($i = 0; $i < count($this -> numbers); $i++){
            if($this -> numbers[$i] % 2 == 0){
                $final[] = $this -> numbers[$i];
                $count++;
            }
        }

        print_r($final);
        echo $count;
    }


    public function odd(){
        $final = [];
        $count = 0;
        for($i = 0; $i < count($this -> numbers); $i++){
            if($this -> numbers[$i] % 2 != 0){
                $final[] = $this -> numbers[$i];
                $count++;
            }
        }

        print_r($final);
        echo $count;
    }
}

$num1 =  new Find();
$num1 -> numbers = [1,2,3,2,5,5,6,2];
$num1 -> duplicate();
$num1 -> unique();
$num1 -> even();
$num1 -> odd();




?>