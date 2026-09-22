<?php
// Create a class that stores multiple objects inside another object. Add, remove, search, and display nested objects

class Student{
    public $student;
    public $name;
    public $studentArray;

    public function search(){
        foreach ($this -> studentArray as $ele){
            if($ele -> name == "Vansh"){
                echo "Found";
            }
        }
    }

    public function display(){
        echo "<pre>";
        foreach ($this -> studentArray as  $ele){
            print_r($ele);
        }
    }

    public function add($n){
        $this -> studentArray[] = $n;
    }

    public function remove(){
        array_shift($this -> studentArray);
    }
}


$student1 = new Student();
$student1 -> name = "Neel";

$student2 = new Student();
$student2 -> name = "Harnek";

$student3 = new Student();
$student3 -> name = "Vansh";

$students = new Student();
$students -> studentArray = [$student1, $student2, $student3];
$students -> search();

$student4 = new Student();
$student4 -> name = "Pardeep";
$students -> add($student4);
$students -> remove();

$students -> display();





?>