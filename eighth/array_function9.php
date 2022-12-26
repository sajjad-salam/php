<?php
/*
array_map
array_filter
*/
function add_title($fname,$lname)
{
        return "mr $fname $lname";
}
echo add_title("sajjad","salam");

$first_names = ["0sama", "Ahmed", "Sayed", "Mahmoud ", "Sameh", "Gama1 " ] ;
$last_names = ["Ameer", "Samy", "Shady", "Amr ", "Mohamed", "Ibrahim" ];

echo "<pre>";
print_r(array_map("add_title",$first_names,$last_names));
/*
Array
(
    [0] => mr 0sama Ameer
    [1] => mr Ahmed Samy
    [2] => mr Sayed Shady
    [3] => mr Mahmoud  Amr 
    [4] => mr Sameh Mohamed
    [5] => mr Gama1  Ibrahim
)
*/
echo "</pre>";

echo "<pre>";
print_r(array_map(fn($f,$l)=> "hello mr $f $l ",$first_names,$last_names));
/*
Array
(
    [0] => hello mr 0sama Ameer 
    [1] => hello mr Ahmed Samy 
    [2] => hello mr Sayed Shady 
    [3] => hello mr Mahmoud  Amr  
    [4] => hello mr Sameh Mohamed 
    [5] => hello mr Gama1  Ibrahim 
)
*/
echo "</pre>";

$nums=[1 => 3 , 6 => 1 ,3 => 2 , 4 => 8 , 5 => 4];
function ifar($n)
{
    if ($n>1) {
        return "$n";
    }
}

echo "<pre>";
print_r(array_map("ifarr",$nums));// on values
/*
Array
(
    [1] => 3
    [6] => 
    [3] => 2
    [4] => 8
    [5] => 4
)
*/
echo "</pre>";
$nums=[1 => 3 , 6 => 1 ,3 => 2 , 4 => 8 , 5 => 4];

function ifarr($n)
{
    if ($n>1) {
        return "$n";
    }
}

echo "<pre>";
print_r(array_filter($nums,"ifarr"));// on values
/*
Array
(
    [1] => 3
    [3] => 2
    [4] => 8
    [5] => 4
)
*/
echo "</pre>";

echo "<pre>";
print_r(array_filter($nums,"ifarr",ARRAY_FILTER_USE_KEY));//on keys
/*
Array
(
    [6] => 1
    [3] => 2
    [4] => 8
    [5] => 4
*/
echo "</pre>";



echo "<pre>";
print_r(array_filter($nums,"ifarr",ARRAY_FILTER_USE_BOTH ));//on both
/*
Array
(
    [1] => 3
    [3] => 2
    [4] => 8
    [5] => 4
*/
echo "</pre>";
