<?php
// Create a Student class with name and age. Create an object and display the student's details

class Student{
    public $name;
    public $age;

    public function display(){
        echo $this->name. "<br>";
        echo $this->age;
    }
}

$student1 = new Student();
$student1->name = "Neel";
$student1->age = 20;
$student1->display();




?>