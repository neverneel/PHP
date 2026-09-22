<?php
// Create three traits containing methods with conflicting names. Resolve conflicts using PHP trait operators

trait result{
    public function msg(){
        echo "Failed";
    }
}


class Student{
    use result;
}

$student1 = new Student();
$student1 -> msg();




?>