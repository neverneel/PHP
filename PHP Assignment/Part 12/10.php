<?php
// Create a class representing a stack. Implement Push, Pop, Peek, IsEmpty, and Display operations

class Stack{
    public $array;
    

    public function push($n){
       echo "<pre>";
       array_push($this -> array, $n);
       print_r($this -> array);
    }

    public function pop(){
        echo "<pre>";
        array_pop($this -> array);
        print_r($this -> array);
        
    }


    public function peak(){
        echo "<pre>";
        peak($this -> array);
        print_r($this -> array);
        
    }
}

$stack = new  Stack();
$stack -> array = [2,1,3,5,6,4,8];
$stack -> push(10);
$stack -> pop();






?>