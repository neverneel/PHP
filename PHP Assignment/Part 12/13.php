<?php
// Create a class that stores integers. Implement Linear Search and Binary Search without using PHP built-in search functions

class Integer{
    public $integer;

    public function linearSearch($n){
        for($i = 0; $i < count($this -> integer); $i++){
            if($this -> integer[$i] == $n){
                echo "Found at: ". $i;
            }
        }
    }

    public function binarySearch($n){
        $low = 0;
        $high = count($this -> integer) - 1;
        for($i = $low; $i <= $high; $i++){
            $mid = floor(($high + $low) / 2);


            if($n == $this -> integer[$mid]){
                echo "Found at: ". $mid;
                break;
            }

            if($n < $this -> integer[$mid]){
                $high = $mid;
            }

            if($n > $this -> integer[$mid]){
                $low = $mid;
            }
            // echo "Found at: ". $mid;
        }

        
    }


}


$integerArray1 = new Integer();
$integerArray1 -> integer = [10,8,5,9,4,3,6];
// $integerArray1 -> linearSearch(4);

$integerArray2 = new Integer();
$integerArray2 -> integer = [1,2,3,4,5,6,7,8,9,10];
$integerArray2 -> binarySearch(9);




?>