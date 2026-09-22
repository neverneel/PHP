<?php
// Create an Employee class with id, name, and salary. Display the employee information using a method

class Employee{
    public $id;
    public $name;
    public $salary;

    public function display(){
        echo $this->id. "<br>";
        echo $this->name. "<br>";
        echo $this->salary. "<br>";
    }
}

$employee1 = new Employee();
$employee1->id = 1;
$employee1->name = "Varun";
$employee1->salary = "45000";

$employee1->display();




?>