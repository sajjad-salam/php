<?php

// implode  =>import =>join()
// explode  =>import =>limit()

$friends = ["Ahmed", "Osama", "Ali", "salem"];

echo implode(" ",$friends);// Ahmed Osama Ali salem
echo implode("@@ ",$friends);// Ahmed@@ Osama@@ Ali@@ salem


$str = "sajjad salam teama obed";
echo "<pre> ";
print_r(explode (" ",$str));
/*
output
Array
(
    [0] => sajjad
    [1] => salam
    [2] => teama
    [3] => obed
)
*/
echo "</pre> ";
//==========================
echo "<pre> ";
print_r(explode ("t", $str));
/*
output
Array
(
    [0] => sajjad salam t
    [1] => eama obed
)
*/
echo "</pre> ";

//==========================
echo "<pre> ";
print_r(explode (" ", $str,2));
/*
output
Array
(
    [0] => sajjad
    [1] => salam teama obed
)
*/
echo "</pre> ";

//==========================
echo "<pre> ";
print_r(explode (" ", $str,-2));
/*
output
Array
(
    [0] => sajjad 
    [1] => salam
)
*/
echo "</pre> ";

//==========================

echo str_shuffle("sajjad") . "<br>" ;//rendomely

echo strrev("sajjad") . "<br>" ;//dajjas

echo strlen(trim("   sajjad")). "<br>" ;//6
echo strlen("   sajjad") . "<br>";//9

echo trim( "#sajjad###", "#"). "<br>";//sajjad
echo rtrim( "#sajjad###", "#"). "<br>";//#sajjad
echo ltrim( "#sajjad###", "#"). "<br>";//sajjad###

// manual
