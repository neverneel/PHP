<?php
// Create a class that stores products. Sort them by price, quantity, and name without using built-in sorting functions

class Product{
    public $price;
    public $quantity;
    public $name;
    public $productList;

    public function sortByPrice(){
        echo "<pre>";
        for($i = 0; $i < count($this -> productList); $i++){
            for($j = $i + 1; $j < count($this -> productList); $j++){
                if($this -> productList[$j] -> price > $this -> productList[$i] -> price){
                    $temp = $this -> productList[$j];
                    $this -> productList[$j] = $this -> productList[$i];
                    $this -> productList[$i] = $temp;
                }
            }
        }

        print_r($this -> productList);
    }

    public function sortByQuantity(){
        echo "<pre>";
        for($i = 0; $i < count($this -> productList); $i++){
            for($j = $i + 1; $j < count($this -> productList); $j++){
                if($this -> productList[$i] -> quantity > $this -> productList[$j] -> quantity){
                    $temp = $this -> productList[$j];
                    $this -> productList[$j] = $this -> productList[$i];
                    $this -> productList[$i] = $temp;
                }
            }
        }

        print_r($this -> productList);
    }

    public function sortByName(){
        echo "<pre>";
        for($i = 0; $i < count($this -> productList); $i++){
            for($j = $i + 1; $j < count($this -> productList); $j++){
                if($this -> productList[$i] -> name > $this -> productList[$j] -> name){
                    $temp = $this -> productList[$j];
                    $this -> productList[$j] = $this -> productList[$i];
                    $this -> productList[$i] = $temp;
                }
            }
        }

        print_r($this -> productList);
    }
}


$product1 = new Product();
$product1 -> price = 199;
$product1 -> quantity = 1;
$product1 -> name = "Meth";

$product2 = new Product();
$product2 -> price = 399;
$product2 -> quantity = 3;
$product2 -> name = "Crystal";

$product3 = new Product();
$product3 -> price = 299;
$product3 -> quantity = 2;
$product3 -> name = "Bliss";

$products = new Product();
$products -> productList = [$product1, $product2, $product3];
$products -> sortByPrice();
$products -> sortByQuantity();
$products -> sortByName();





?>