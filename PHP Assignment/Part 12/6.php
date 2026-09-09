<?php
// Create a class that accepts multiple strings. Sort them alphabetically, remove duplicates, and find the longest string

class Find{
    public $strings;

    public function removeDuplicates(){
        $final = [];
        
        echo "<pre>";
        for($i = 0; $i < count($this -> strings); $i++){
            $count = 0;
            for($j = 0; $j < count($this -> strings); $j++){
                if($this -> strings[$i] == $this -> strings[$j]){
                    $count++;
                    break;
                }
                
            }
            if($count < 2){
                $found = false; 
                for($k = 0; $k < count($final); $k++){
                    if($final[$k] == $this -> strings[$i])
                        $found = true;
                }
                if($found == false){
                    $final[] = $this -> strings[$i];
                }
            }
            
        }

        print_r($final);
    }


    public function longestString(){
        $final = "";
        for($i = 0; $i < count($this -> strings); $i++){
            for($j = $i + 1; $j < count($this -> strings); $j++){
                if(strlen($this -> strings[$i]) >= strlen($this -> strings[$j])){
                    $final = $this -> strings[$i];
                }
            }
        }

        print_r($final);
    }

    public function sort(){
        for($i = 0; $i < count($this -> strings); $i++){
            for($j = $i + 1; $j < count($this -> strings); $j++){
                if($this -> strings[$i] > $this -> strings[$j]){
                    $temp = $this -> strings[$j];
                    $this -> strings[$j] = $this -> strings[$i];
                    $this -> strings[$i] = $temp;
                    // break;
                }
            }
        }

        print_r($this -> strings);
    }
}

$string = new Find();
$string -> strings = ["Neel","Kamal","Halloween", "Neel"];
$string -> removeDuplicates();
$string -> longestString();
$string -> sort();




?>