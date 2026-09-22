<?php
// Create a class that accepts another object through its constructor. Perform operations using object composition

class Student{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class School{
    public $student;

    public function __construct($student){
        $this->student = $student;
    }

    public function display(){
        echo $this->student->name. "<br>";
        echo $this->student->age;
    }
}



$student1 = new Student("Neel", 24);

$school = new School($student1);
$school-> display();





?>