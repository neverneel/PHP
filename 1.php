<?php 

// $a = 6;
// $b = 5;
// $c = $a + $b;
// $d = $c - $b;
// $e = $d * 2;
// $f = $e / 3;


$a = "Hello";
$b = "World";

$c = 6;

$a.=$c;



$txt1 = "Sic Mundus";
$txt2 = "Creatus Est";

echo 'Hi $txt1';
echo "<br>";
echo "Hi $txt1";

echo "<br>";


// assignment

$aa = 7;
$aa += 7;

$bb = 8;
$bb -= 4;

//$a = 1;

/*$a = true;*/

// echo "$a<br> $b <br> $c $d $e $f";
echo $a.$b.$c;
echo "<br> --- <br>";
echo $bb;
echo "<br> --- <br>";
echo $a.=$c;

echo "<br>";
echo $txt1." ".$txt2;

echo "<h1>$txt1</h1>";
echo "<h1>$txt1</h1>","<h2>$txt2</h2>";

echo $txt1 .= $txt2;
echo "<br>";
var_dump($aa);
?>

<h1><?php echo $a." ". $b ?></h1>

