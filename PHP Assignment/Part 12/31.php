<?php
// Create a class that stores objects in ascending order automatically whenever a new object is added

class Student{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}


class Collection{
    public $allStudents = [];

    public function store($student = []){
        $this->allStudents[] = $student;
    }

    public function sort(){

        for($i = 0; $i < count($this->allStudents); $i++){
            for($j = $i +1; $j < count($this->allStudents); $j++){
                if($this->allStudents[$i]->age > $this->allStudents[$j]->age){
                    $temp = $this->allStudents[$j];
                    $this->allStudents[$j] = $this->allStudents[$i];
                    $this->allStudents[$i] = $temp;
                }
            }
        }
        // sort($this->allStudents);
    }

    public function display(){
        echo "<pre>";
        print_r($this->allStudents);
    }
}


 $student1 = new Student("Vansh", 20);
 $student2 = new Student("Harnek", 19);
 $student3 = new Student("Hello", 18);


$studentArray = new Collection();
$object1 = array("Volvo", "BMW", "Toyota");
$object2 = array(20, 40, 50, 33, 59, 32);
 $studentArray->store($student1);
  $studentArray->store($student2);
 $studentArray->store($student3);

$studentArray->sort();
$studentArray->display();





?>