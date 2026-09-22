<?php
// Create a class representing a queue. Implement Enqueue, Dequeue, Front, Rear, and Display operations

class Queue{
    public $queue;

    public function enqueue($n){
        echo "<pre>";
        $this -> queue[] = $n;
        print_r($this -> queue);
    }

    public function dequeue(){
        // for($i = 0; $i < count($this -> queue) - 1; $i++){
        //     $this -> queue[$i] = $this -> queue[$i + 1];
        // }
        // array_splice($this -> queue, count($this -> queue) - 1, 1);

        array_shift($this -> queue);
        print_r($this -> queue);
    }

    public function front(){
        echo $this -> queue[0]. "<br>";
    }

    public function rear(){
        echo $this -> queue[count($this -> queue) - 1]. "<br>";
    }

    public function display(){
        print_r($this -> queue);
    }
}


$queue = new Queue();
$queue -> queue = [2,3,5,8,9,4];
$queue -> enqueue(10);
$queue -> dequeue();
$queue -> front();
$queue -> rear();
$queue -> display();





?>