<?php
// Create a class that maintains a history of every operation performed on an object

class Student{
    public $name;
    public $age;
    public $history = [];
    

    public function __construct($name, $age){
        echo "<pre>";
        $this->name = $name;
        $this->age = $age;
        $this->history[] = "Student Created";
    }

    public function updateName($n){
        $this->name = $n;
        $this->history[] = "Name Changed";
    }

    public function display(){
        echo $this->name;
        echo $this->age;
        $this->history[] = "Student Displayed";
        print_r($this->history);
    }
}


$student1 = new Student("Vansh", 20);
$student2 = new Student("Harnek", 21);

$student1->updateName("Neel");
$student1->display();


?>