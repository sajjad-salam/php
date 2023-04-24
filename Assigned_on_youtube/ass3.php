<?php 
// Replace ? With Arithmetic Operators
// echo (10 * 20) + (15 % 3) + (190 + 10) - 400 ;// 0

// $a = "10";


// echo (+$a);
// echo "<br>";
// echo gettype(+$a);
// echo "<br>";

// echo (int)$a;
// echo "<br>";
// echo gettype((int)$a);
// echo "<br>";
// echo (integer)$a;
// echo "<br>";
// echo gettype((integer)$a);
// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"

// // For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"



// $a = 10;
// $b = 20;

// Needed Output
// -1
// echo ($a-$b)/10;
// echo gettype(($a-$b)/10);

// $a = 10;
// $b = 20;
// $c = 15;

// var_dump($a < $b); // True
// var_dump($c > $a); // True
// var_dump($a <= $b); // True
// var_dump($a != $b); // True
// var_dump($a != $c); // True
// var_dump($a !== $c); // True
// var_dump(gettype($a) == gettype($b)); // True
// var_dump(gettype($a) === gettype($b)); // True
// var_dump(gettype((float) $a) != gettype($b)); // True



// $points = 10;

// // Write Your Code Here
// $points+=3;
// echo $points; // 13
// echo "<br>";
// // Write Your Code Here
// $points-=5;
// echo $points; // 8;




// $a = "Elzero";
// $b = "Web";
// $c = "School";

// $d="";

// // $d=$a ." " .$b . " " .$c . " "; 
// $d="$a $b $c ";
// echo $d; // Elzero Web School



// Code 1
$a = @$b or die("Custom Error");

// Code 2
$f = @file("Not_A_File");

// Code 3
@include("Not_A_File");
?>
