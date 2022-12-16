<?php


function one()
{
    return "hello user!";
}

$fun1="one";

echo $fun1 . "<br>";//one
echo $fun1();//hello user!

// function_exists("name of function ") // to cheack function exist or no
if (function_exists("test")) {
    # code...
    echo "yes";
}else {
    echo "function not found";
}
