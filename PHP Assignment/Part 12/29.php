<?php
// Create a collection class. Store, update, delete, search, and count objects without using global arrays

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

    public function store($student){
        $this->allStudents[] = $student;
    }

    public function dispaly(){
        echo "<pre>";
        print_r($this->allStudents);
    }

    public function update($name, $age, $i){
        $this->allStudents[$i]->name = $name;
        $this->allStudents[$i]->age = $age;
    }

    public function search($n){
        foreach($this->allStudents as $ele){
            if($ele->name == $n){
                echo "found";
            }
        }
    }

    public function delete($i){
        unset($this->allStudents[$i]);
    }

    public function count(){
        echo count($this->allStudents);
    }
}

$student1 = new Student("vansh", 20);
$student2 = new Student("harnek", 21);

$studentCollection = new Collection();
$studentCollection->store($student1);
$studentCollection->store($student2);
$studentCollection->update("hello",45,0);
$studentCollection->delete(1);

$studentCollection->dispaly();
$studentCollection->count();

$studentCollection->search("harnek");
// $studentCollection->allStudents = [$student1, $student2];






?>