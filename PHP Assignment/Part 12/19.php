<?php
// Create a class with private properties. Control all property access using magic methods (__get() and __set())
 class Student{
        private $name="";
        private $age="";

        public function __set($property, $value){
            $this -> $property = $value;
        }
        public function __get($property){
            return $this -> $property; 
        }
 }

 $obj=new Student();
 $obj-> name = "Neel";
 $obj -> age = 24;

 echo "Name: ". $obj -> name;

?>