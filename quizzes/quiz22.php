<?php
/*You have a set of variables to help you do what you want
You must use the function substr_count() to return the result
It is absolutely not allowed to use anything other than the values ​​of the available variables only
In the first line, you use the Function to return 1
In the second line, you use the Function to return a number*/
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;


echo substr_count($str,strtolower($o),-2);
echo "<br>";
echo substr_count($str,"$e",0);

// 1
// 2