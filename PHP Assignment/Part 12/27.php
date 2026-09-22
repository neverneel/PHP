<?php
// Create a class hierarchy with four inheritance levels. Call parent methods from each child using parent::

class School{
    public function display(){
        echo "School". "<br>";
    }
}

class Standard extends School{
    public function display(){
        parent::display();
        echo "Standard". "<br>";
    }
}

class Section extends Standard{
    public function display(){
        parent::display();
        echo "Section". "<br>";
    }
}

class Teacher extends Section{
    public function display(){
    parent::display();
    echo "Teacher";
    }
}


$teacher = new Teacher();
$teacher->display();




?>