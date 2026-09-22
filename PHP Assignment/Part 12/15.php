<?php
// Create a base class and three child classes. Override the same method differently in every child class

class Animal{
    public function sound(){
        echo "Animal makes a sound";
    }
}

class Dog extends Animal{
    public function sound(){
        echo "Dog barks";
    }
}

class Cat extends Animal{
    public function sound(){
        echo "Cat meows";
    }
}

class Tiger extends Animal{
    public function sound(){
        echo "Tiger roars";
    }
}


$dog = new Dog();
$cat = new Cat();
$tiger = new Tiger();


$dog -> sound();
echo "<br>";
$cat -> sound();
echo "<br>";
$tiger -> sound();






?>