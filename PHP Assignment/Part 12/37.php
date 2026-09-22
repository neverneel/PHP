<?php
// Create a class that performs different operations depending on the object's type using polymorphism

class Shape{
    public function calculateArea(){
        echo "Area";
    }
}

class Rectangle extends Shape{
    public $l;
    public $b;
    public  function calculateArea(){
        $area = $this->l * $this->b;
        echo $area;
    }
}


class Square extends Shape{
    public $l;
    public function calculateArea(){
        $area = $this->l * $this->l;
        echo $area;
    }
}

$rectangle1 = new Rectangle();
$rectangle1->l = 5;
$rectangle1->b = 6;
$rectangle1->calculateArea();

$square1 = new Square();
$square1->l = 5;
$square1->calculateArea();




?>