<?php
// Create a Function that accepts an unknown number of Arguments

// All Arguments are required next to each other in a variable named all

// A return is required for the value of this variable

// It is required to fetch the Arguments in two different ways
// Needed Output
// echo get_arguments("sajjad", "salam", "teama"); // sajjad salam teama

// Write Function Content Here
function merege_text(...$text)
{
    foreach ($text as $item) {
        echo $item ," ";
    }
    
    
};

$all= merege_text("sajjad","salam","teama");
echo $all;
