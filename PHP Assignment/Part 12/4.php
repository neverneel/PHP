<?php
// Create a class that manages multiple student objects. Sort students by name, age, and marks using separate methods

class Student{
    public $name;
    public $age;
    public $marks;
    public $studentList;

    public function sortByName(){
        echo "<pre>";
        for($i = 0; $i < count($this -> studentList); $i++){
                for($j = $i + 1; $j < count($this -> studentList); $j++){
                    if($this -> studentList[$i] -> name > $this -> studentList[$j] -> name){
                        $temp = $this -> studentList[$j];
                        $this -> studentList[$j] = $this -> studentList[$i];
                        $this -> studentList[$i] = $temp;
                    }
                }

        }
                        print_r($this -> studentList);

        }

        public function sortByAge(){
            echo "<pre>";

            for($i = 0; $i < count($this -> studentList); $i++){
                for($j = $i + 1; $j < count($this -> studentList); $j++){
                    if($this -> studentList[$i] -> age > $this -> studentList[$j] -> age){
                        $temp = $this -> studentList[$j];
                        $this -> studentList[$j] = $this -> studentList[$i];
                        $this -> studentList[$i] = $temp;
                    }
                }
            }
                print_r($this -> studentList);

        }

        public function sortByMarks(){
            echo "<pre>";

            for($i = 0; $i < count($this -> studentList); $i++){
                for($j = $i + 1; $j < count($this -> studentList); $j++){
                    if($this -> studentList[$i] -> marks > $this -> studentList[$j] -> marks){
                        $temp = $this -> studentList[$j];
                        $this -> studentList[$j] = $this -> studentList[$i];
                        $this -> studnetList[$i] = $temp;
                    }
                }
            }
                            print_r($this -> studentList);

        }

    }



$studentsArray =[];

$student1 = new Student();
$student1 -> name = "Neel";
$student1->age = 22;
$student1->marks = 90;

$studentsArray[] = $student1;

$student2 = new Student();
$student2 -> name = "Harnek";
$student2->age = 23;
$student2->marks = 91;

$studentsArray[] = $student2;

$students = new Student();
$students -> studentList = [$student2, $student1];

$students -> sortByName();
$students -> sortByAge();
$students -> sortByMarks();


echo "<pre>";
print_r($student1);
print_r($student2);

print_r($studentsArray);




?>