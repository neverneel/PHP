<?php
// Create a class that manages multiple collections. Move objects from one collection to another

class Student{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}


class Collection{
    public $allStudents = [];
    public $allStudents2 = [];

    public function shift($n){
        for($i = 0; $i < count($this->allStudents); $i++){
            if($this->allStudents[$i]->name == $n){
                $temp = $this->allStudents[$i];
                array_splice($this->allStudents, $i, 1);
                $this->allStudents2[] = $temp;
                // array_push($this->allStudents2, $temp);
            }
        }
    }


    public function display(){
        echo "<pre>";
        print_r($this->allStudents);
        print_r($this->allStudents2);
    }
}


$student1 = new Student("Vansh");
$student2 = new Student("Neel");
$student3 = new Student("Harnek");
$student4 = new Student("Pardeep");
$student5 = new Student("Hello");


$students = new Collection();
$students->allStudents = [$student1, $student2, $student5];
$students->allStudents2 = [$student3, $student4];

$students->shift("Vansh");

$students->display();



?>