<?php
// Create a class that implements a custom iterator to traverse objects one by one

class Student{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}


class Iterate implements Iterator
{
    public $allStudents;
    private $position = 0;

    public function current(){
        return $this->allStudents[$this->position];
    }

    public function key(){
        return $this->position;
    }

    public function next(){
        return $this->position++;
    }

    public function rewind(){
        return $this->position = 0;
    }

    public function valid(){
        return isset($this->allStudents[$this->position]);
    }
}


$student1 = new Student("Vansh");
$student2 = new Student("Neel");
$student3 = new Student("Harnek");

$students = new Iterate();
$students->allStudents = [$student1, $student2, $student3];

foreach($students as $student){
    echo $student->name. "<br>";
}

// print_r($students->current());
// echo $students->key();
// echo $students->next();






?>