<?php
// Create a Function that greets people
// The Function accepts two Paramaters, which are the person's name and type
// Based on the type of person, write the appropriate Title Mr For Male, Miss For Female
// If the type is not written, do not write any Title before the name
// Write Function Content Here
function say_hello($name,$type="")
{
    if ($type=="male") {
        echo "hello mr $name";
    }
    elseif ($type=="feamle") {
        echo "hello miss $name";
    } else {
        echo "hello $name";
    }
}
// Needed Output
// echo greeting("Osama", "Male"); // Hello Mr Osama
// echo greeting("Eman", "Female"); // Hello Miss Eman
// echo greeting("Sameh"); // Hello Sameh
