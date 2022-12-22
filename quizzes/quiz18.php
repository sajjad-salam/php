<?php
/*You have variables that contain numbers and letters to help you do what you want
Not all variables must be modified
Use the values ​​of the variables to get the desired result
It is absolutely not allowed to use anything other than the values ​​of the available variables only
*/
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str= substr_replace($str,$let_two,(int)$num_two,-3);//
$str= substr_replace($str,$let_one,$num_one);//


echo $str; // Elzero