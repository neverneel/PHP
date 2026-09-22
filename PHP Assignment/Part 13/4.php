<?php
// Create a Book class with title, author, and price. Display all book information

class Library{
    public $title;
    public $author;
    public $price;

    public function __construct($title, $author, $price){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function display(){
        echo $this->title. "<br>";
        echo $this->author. "<br>";
        echo $this->price. "<br>";
    }
}

$book1 = new Library("Mathematics", "RD Sharma", 1500);
$book1->display();





?>