<?php
// You have a variable named message that contains the value Hello
// It is not allowed to type any word with your hand and only use the message variable
// It is not allowed to create a variable named Hello, and from what you have learned, think about how it will exist
$message = "Hello";

// Write Your Code Here
$$message = function ($name) use ($message) { //use ($msg)  include the var inside the function
    return "$message $name";
};



echo $Hello("Osama"); // Hello Osama
