<?php
// Create a class that dynamically handles undefined methods using __call(). Return custom responses based on the method name

class Student
{
    public function __call($method, $arguments)
    {
        if ($method == "hello") {
            echo "Hello Student";
            echo "<pre>";
            print_r($arguments);
            echo "</pre>";
        }

        if($method == "bye"){
            echo "Bye Student";
        }
    }
}


$student1 = new Student();
$student1 ->hello(2);
$student1 -> bye();
