<?php
// Create an abstract class with three abstract methods. Implement all methods in multiple child classes

abstract class Animal{
    abstract public function sound();
    abstract public function eat();
    abstract public function lives();
}


class Dog extends Animal{
    public function sound(){
        echo "Dog barks";
    }

    public function eat(){
        echo "Dog eats pedigree";
    }

    public function lives(){
        echo "Dog  lives in Kennel";
    }
}

class Cat extends Animal{
    public function sound(){
        echo "Cat meows";
    }

    public function eat(){
        echo "Cat eats fish";
    }

    public function lives(){
        echo "Cat lives in Catio";
    }
}


$dog = new Dog();
$dog -> eat();






?>