<?php
// Create a parent class with protected properties. Allow only child classes to modify those properties

class School{
    protected $name;

    public function display(){
        echo $this->name;
    }
}

class Student extends School{
    public function display(){
    $this->name = "St. Francis School";
    parent::display();
    }

}

$student1 = new Student();
$student1->display();



?>