<?php
// Create a class that recursively traverses nested arrays and calculates the total sum of all numeric values

class Operation{
    public $arr;

    public function sum(){
        $sum = 0;
        foreach($this->arr as $ele){
            foreach($ele as $ele2){
                $sum = $sum + $ele2;
            }
        }
        echo $sum;
    }
}

$array1 = new Operation();
$array1->arr = [[1,2,3],[4,5,6],[7,8,9]];
$array1->sum();




?>