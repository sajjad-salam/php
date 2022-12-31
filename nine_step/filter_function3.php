<?php 

$email = "sajjad@gmail.com";


var_dump(filter_var($email,FILTER_VALIDATE_EMAIL
,FILTER_NULL_ON_FAILURE));//string(16) "sajjad@gmail.com" 

echo "<br>";



$int="100";
var_dump(filter_var($int,FILTER_VALIDATE_INT
,FILTER_NULL_ON_FAILURE));//int(100) 

echo "<br>";




$int="100";
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags"=> FILTER_NULL_ON_FAILURE,
    "option"=> ["min_range"=> 50,"max_range"=>100]]
    
));//int(100) 

echo "<br>";


$int="101";
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags"=> FILTER_NULL_ON_FAILURE,
    "options"=> ["min_range"=> 50,"max_range"=>100]]
    
));//null 

echo "<br>";


$float="90.2";
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags"=> FILTER_NULL_ON_FAILURE,
    "option"=> ["min_range"=> 50,"max_range"=>100]]

));//int(100) 
