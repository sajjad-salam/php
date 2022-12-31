<?php 

$email="sa      ]      @gmail.com";

var_dump(filter_var($email,
FILTER_SANITIZE_EMAIL));
//string(13) "sa]@gmail.com" 

echo "<br>";

$int="15      +   110";

var_dump(filter_var($int,
FILTER_SANITIZE_NUMBER_INT));
//string(6) "15+110" 


echo "<br>";

$float="15.5";

var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    
));
//string(3) "155" 

echo "<br>";

var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags"=>FILTER_FLAG_ALLOW_FRACTION]
    
));
//string(4) "15.5" 
//


echo "<br>";
$url="https://saj          ja    d.com";

var_dump(filter_var(
    $url,
    FILTER_SANITIZE_URL,
    ["flags"=> FILTER_NULL_ON_FAILURE]
));//string(18) "https://sajjad.com" 