<?php
// Create a graph class. Implement Depth First Search (DFS) and Breadth First Search (BFS)

class Graph{
    public $graph = [];
    
    public function addEdge($from, $to){
        $this->graph[$from][] = $to;
    }

    public function display(){
        echo "<pre>";
        print_r($this->graph);
    }

    public function dfs($node, &$visited = []){
        $visited[$node] = true;

        echo $node, " ";

        foreach($this->graph[$node] as $neighbour){
            if(!isset($visited[$neighbour])){
                $this->dfs($neighbour, $visited);
            }
        }
    }

    public function bfs($node, $visited = []){
        $visited[$node] = true;
    }
}

$graph1 = new Graph();
$graph1->addEdge("A", "B");
$graph1->addEdge("A", "C");
$graph1->addEdge("B", "D");

$graph1->display();
$graph1->dfs("A");



?>