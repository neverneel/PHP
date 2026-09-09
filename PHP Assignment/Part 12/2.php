<?php
// Create a class that accepts a string. Count vowels, consonants, digits, spaces, and special characters

class Find{
    public $string;

    public function vowels(){
        $v = ["a","e","i","o","u"];
        $count = 0;
        for($i = 0; $i < strlen($this -> string); $i++){
            if(in_array($this -> string[$i], $v)){
                $count++;
            }
        }

        echo $count. "<br>";
    }


    public function consonants(){
        $v = ["a","e","i","o","u"];
        $count = 0;
        for($i = 0; $i < strlen($this -> string); $i++){
            if(!in_array($this -> string[$i], $v) && $this -> string[$i] != " "){
                $count++;
            }
        }

        echo $count. "<br>";
    }


    public function spaces(){
        $count = 0;
        for($i = 0; $i < strlen($this -> string); $i++){
            if($this -> string[$i] == " "){
                $count++;
            }
        }

        echo $count. "<br>";
    }


    public function specialCharacters(){
        $v = ["!","@","#","%","&","^","/","*","$"];
        $count = 0;
        for($i = 0; $i < strlen($this -> string); $i++){
            if(in_array($this -> string[$i], $v)){
                $count++;
            }
        }

        echo $count. "<br>";
    }


    public function digits(){
        $count = 0;
        for($i = 0; $i < strlen($this -> string); $i++){
            if(is_numeric($this -> string[$i])){
                $count++;
            }
        }

        echo $count;
    }
}


$str = new Find();
$str -> string = "Hello@ My! Name$ is* Khan# 1";
$str -> vowels();
$str -> consonants();
$str -> spaces();
$str -> specialCharacters();
$str -> digits();





?>