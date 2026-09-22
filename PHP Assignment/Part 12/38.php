<?php
// Create a class that stores multidimensional arrays. Flatten, reverse, and rotate the array using class methods

class Operation{
    public $arr;

    public function flatten(){
        $final = [];
        echo "<pre>";
        foreach($this->arr as $ele){
            foreach($ele as $ele2){
                $final[] = $ele2;
            }
        }
        // print_r($final);
        return $final;
    }

    public function reverse(){
        $rev= $this->flatten();
        $final = [];
        // print_r($rev);

        for($i = count($rev) -1 ; $i >= 0; $i--){
            $final[] = $rev[$i];
        }

        print_r($final);
    }

    public function rotate(){
        $final = [];
        for($i = 0; $i < count($this->arr); $i++){
            $row = [];

            for($j = count($this->arr) - 1; $j >= 0; $j--){
                $row[] = $this->arr[$j][$i];
            }

            $final[] = $row;
            
        }
        print_r($final);
    }
}


$array1 = new Operation();
$array1->arr = [[1,2,3], [4,5,6], [7,8,9]];
print_r($array1->flatten());
$array1->reverse();
$array1->rotate();




?>