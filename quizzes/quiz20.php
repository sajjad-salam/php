<?php
$str = 'aAa';
$num = 3;
$char = "_";
$str= strtolower($str);
$re="$str$char";
// Write Your Code Here
$re=str_repeat($re,$num);// aaa_aaa_aaa_
echo $re;
// aaa_aaa_aaa_