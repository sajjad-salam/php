<?php

$nums = [10, 20, 30];
function f($n1, $n2)
{
    if (($n1+$n2)==60) {
        echo $n1+$n2 ."<br>";
    }
    return $n1 + $n2 ;
}
echo array_reduce($nums, "f");
/*
Output
60
60
*/