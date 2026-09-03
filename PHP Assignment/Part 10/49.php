<?php
// Write a static method inside a class that performs a calculation without instantiating the class

class greeting{
    public static function welcome(){
        echo "Hello World";
    }
}

greeting::welcome();



?>