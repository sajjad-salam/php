<?php

$say_hello = function ($s) {
    return "Hello $s";
};

echo $say_hello("sajjad");


//function  inheritance of variables

$msg = "hello";
$say_hello = function ($s) use ($msg) { //use ($msg)  include the var inside the function
    return "$msg $s";
};

echo $say_hello("sajjad");


//==================


$nums = [10, 20, 38, 40, 58];
function add_five($item)
{
    return $item + 5;
}


$nums_after_adding = array_map("add_five", $nums);// array map => array_map("function",array);
//her idea like foreach of all items of array 
echo '<pre> ';
print_r($nums_after_adding); //
echo '</pre> ';
//output ==========
// Array
// (
//     [0] => 15
//     [1] => 25
//     [2] => 43
//     [3] => 45
//     [4] => 63
// )


//Anonymous Function

$nums_after_adding_ten = array_map(function($it){return $it +10;} , $nums);// array map => array_map("function",array);
