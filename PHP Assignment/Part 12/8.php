<?php
// Create a class that stores employee objects. Search employees by ID, name, and salary range


class Employee{
    public $id;
    public $name;
    public $salaryRange;
    public $employeeList;


    public function searchById($id){
        echo "<pre>";
        for($i = 0; $i < count($this -> employeeList); $i++){
            if($this -> employeeList[$i] -> id == $id){
                print_r($this -> employeeList[$i]);
            }
        }
    }

    public function searchByName($name){
        for($i = 0; $i < count($this -> employeeList); $i++){
            if($this -> employeeList[$i] -> name == $name){
            print_r($this -> employeeList[$i]);
        }
        }
    }
}


$employee1 = new Employee();
$employee1 -> id = 1;
$employee1 -> name = "Neel";
$employee1 -> salaryRange = 3.5;

$employee2 = new Employee();
$employee2 -> id = 2;
$employee2 -> name = "Vansh";
$employee2 -> salaryRange = 4.5;

$employees = new Employee();
$employees -> employeeList = [$employee1, $employee2];
$employees -> searchById(1);
$employees -> searchByName("Vansh");



?>