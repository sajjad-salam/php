<?php
//parse_str
/*
The function takes the information and converts it into an array
*/
$data = "name=sajjad&email=s@wa&pass=3495";
$arr=[];

parse_str($data,$arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
/*
Array
(
    [name] => sajjad
    [email] => s@wa
    [pass] => 3495
    )
*/


// manual
