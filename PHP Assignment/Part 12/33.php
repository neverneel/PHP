<?php
// Create a class that validates object properties before assignment using custom validation methods

class Student{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function validate($n){
        if($n >= 0){
            return true;
        }

        echo "Invalid Age". "<br>";
        return false;
    }

    public function setAge($n){
        if($this->validate($n) == true){
            $this->age = $n;
        }

        // echo "Invalid Age";
    }

    public function display(){
        echo $this->name;
        echo $this->age;
    }
}


$student1 = new Student("Vansh", 20);

$student1->setAge(25);
$student1->display();




?>