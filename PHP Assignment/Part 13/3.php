<?php
// Create a Car class with brand, model, and year. Print the complete car details

class Car{
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function display(){
        echo $this->brand. "<br>";
        echo $this->model. "<br>";
        echo $this->year. "<br>";
    }
}


$car1 = new Car("GMC", "Pickup", 2025);
$car1->display();


?>