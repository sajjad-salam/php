<?php


//pointer
$handel=fopen("/opt/lampp/htdocs/php/salam.txt","r");

echo fgets($handel);//sajjad/
echo "<br>";
echo fgets($handel);//salam/
echo "<br>";
echo fgets($handel);//teama/
echo "<br>";
echo ftell($handel);//20

rewind($handel);
echo "<br>";
echo fgets($handel);//sajjad/
echo "<br>";
echo ftell($handel);//8
echo "<br>";

fseek($handel,12);

echo fgets($handel);//m
echo "<br>";


fclose($handel);