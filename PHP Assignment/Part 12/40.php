<?php
// Create a class that stores numbers. Find all prime numbers, Armstrong numbers, palindrome numbers, and perfect numbers within a given range

class Find{
    public $arr;

    public function prime(){
        $final = [];
        echo "<pre>";
        for($i = 0; $i < count($this->arr); $i++){
            if($this->arr[$i] == 2){
                $final[] = $this->arr[$i];
            }

            if($this->arr[$i] % $this->arr[$i] == 0){
                if($this->arr[$i] % 2 == 0)
            }
        }

        print_r($final);
    }
}


$numbers = new Find();
$numbers->arr = [2,3,8,7,9,6,11,45,33];
$numbers->prime();





?>