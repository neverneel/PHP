<?php
// Create a class that stores multiple objects. Clone an object and prove that changes to one object do not affect the other

class Student{
    public $student;
    public $name;
    public $age;

    public function display(){
        echo "<pre>";
        print_r($this -> student);
    }
}

$student1 = new Student();
$student1 -> name = "Neel";
$student1 -> age = 24;

$student2 = clone($student1);
$student2 -> name = "Vansh";

$studentList = new Student();
$studentList -> student = [$student1, $student2];
$studentList -> display();








?>