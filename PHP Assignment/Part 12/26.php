<?php
// Create a class that overloads object behavior using magic methods. Demonstrate __isset(), __unset(), and __clone()


class Student{
    private $name;
    private $age;
    public $studentArray;

    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }

    public function __isset($property){
        return isset($this -> $property);
    }

    public function __unset($property){
        unset($this -> $property);
    }

    public function __clone(){
        echo "cloned";
    }
}

$student1 = new Student("Neel", 24);
unset($student1 -> name);

 
$student2 = clone($student1);

if(isset($student2 -> name)){
    echo "Exists";
}

// $students = new Student();
// $students -> studentArray = [$student1];
// $students -> __unset($students);

if(isset($student1 -> age)){
    echo "Exists". "<br>";
}







?>