<?php 


$bool = true;


var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,
FILTER_NULL_ON_FAILURE));//true


$bool = "sajjad";


var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,
FILTER_NULL_ON_FAILURE));//null

$url="https://engsajjad.000webhostapp.com/#/";

var_dump(filter_var($url,FILTER_VALIDATE_URL,
FILTER_NULL_ON_FAILURE));//true


$url="://.000webhostapp.com/#/";

var_dump(filter_var($url,FILTER_VALIDATE_URL,
FILTER_NULL_ON_FAILURE));//null 


$url="https://engsajjad.000webhostapp.com/#/";

var_dump(filter_var($url,FILTER_VALIDATE_URL,
["flags"=>FILTER_NULL_ON_FAILURE|
FILTER_FLAG_PATH_REQUIRED | 
FILTER_FLAG_QUERY_REQUIRED]));//true


$ip="192.168.0.1";
var_dump(filter_var($ip,FILTER_VALIDATE_IP
,FILTER_FLAG_IPV4));//true



$ip="2001:db8:3333:4444:5555:6666:7777:8888";
var_dump(filter_var($ip,FILTER_VALIDATE_IP
,FILTER_FLAG_IPV4));//false

var_dump(filter_var($ip,FILTER_VALIDATE_IP
,FILTER_FLAG_IPV6));//true



?>