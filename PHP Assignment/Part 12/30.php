<?php
// Create a class that compares two objects. Determine whether both objects contain identical property values

class Student{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function compare($student){
        if($this->name == $student->name && $this->age == $student->age){
            echo "same";
        }
    }
}

$student1 = new Student("Neel", 24);
$student2 = new Student("Neel", 24);

$student2->compare($student1);


?>