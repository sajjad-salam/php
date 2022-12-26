<?php
//str_pad
/*
The function arranges numbers or texts according to a specific limit
*/

echo  str_pad(5236,8,"0");//52360000
echo "<br>";
echo  str_pad(52360,8,"0",STR_PAD_LEFT);//00052360
echo "<br>";
echo  str_pad(523655,8,"0" ,STR_PAD_BOTH);//05236550
echo "<br>";
echo  str_pad(52,8,"0");//52000000
echo "<br>";
echo  str_pad(6,8,"0");//60000000
echo "<br>";
echo  str_pad("sajjad",8,"##");//sajjad##

// manual
