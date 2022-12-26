<?php
$str="sajjad";
echo "first letter is $str[0]";//s
echo "number of letters is ". strlen($str);//strlen() count the number of letters in a word//6
echo "the last number is $str[-1]";//d
echo "the last number is {$str[strlen($str)-1]}";//d

echo "$str". "<br>";//sajjad
$str[0]="0";//update
echo "$str". "<br>";//0ajjad
$str[6]="m";//add
echo "$str". "<br>";//0ajjadm

// manual
