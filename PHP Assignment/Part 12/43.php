<?php
// Create a class that builds a binary tree. Implement insertion and different tree traversals

class Node{
    public $value;
    public $left;
    public $right;

    public function __construct($value){
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree{
    public $root;

    public function __construct(){
        $this->root = null;
    }

    private function insertNode($node, $value){
        if($value < $node->value){
            if($node->left == null){
                $node->left = new Node($value);
            } else{
                $this->insertNode($node->left, $value);
            }
        }
        elseif($value > $node->value){
            if($node->right == null){
                $node->right = new Node($value);
            } else{
                $this->insertNode($node->right, $value);
            }
        }
    }

    public function insert($value){
        if($this->root == null){
            $this->root = new Node($value);
        } else{
            $this->insertNode($this->root, $value);
        }
    }

    public function display(){
        echo "<pre>";
        print_r($this->root);
    }
}

$tree = new BinaryTree();
$tree->insert(10);
$tree->insert(5);
$tree->insert(15);
$tree->insert(7);
$tree->insert(20);

$tree->display();





?>