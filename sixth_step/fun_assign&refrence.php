<?php


function add_five($num)
{
    $num += 5;
    return $num;
}

$n = 15;
echo add_five($n); //20

echo $n; //15 //this is passing by value

//passing by Reference 
function add_fiv(&$num) //this is passing by Reference
{
    $num += 5;
    return $num;
}

echo add_five($n); //20

// type of data 
function int($n1, $n2): int /// : int   => meaning type return just integer
{
    return $n1 + $n2;
}
