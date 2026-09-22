<?php
// Create a class with static properties. Track the total number of objects and the total number of method calls

class Student{
    public static $objectCount = 0;
    public static $methodCount = 0;

    public function __construct() {
        // $this -> objectCount++;
        self::$objectCount++;
        echo self::$objectCount;
    }

    public function greet(){
        echo "hello";
        self::$methodCount++;
        echo self::$methodCount;
    }
}


$student1 = new Student();
$student2 = new Student();
$student3 = new Student();
$student4 = new Student();


$student1 ->  greet();
$student2 ->  greet();
$student3 ->  greet();






?>