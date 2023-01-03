<?php
/*
sort
rsort
asort
arsort
ksort
krsort
*/
$names =["osama", "Ahmed", "Sayed", "Mahnoud", "Sameh ", "Gamal" ];
sort($names);
echo "<pre>";
print_r($names);
/*
Array
(
    [0] => Ahmed
    [1] => Gamal
    [2] => Mahnoud
    [3] => Sameh 
    [4] => Sayed
    [5] => osama
)
*/
echo "</pre>";

rsort($names);
echo "<pre>";
print_r($names);
/*
Array
(
    [0] => osama
    [1] => Sayed
    [2] => Sameh 
    [3] => Mahnoud
    [4] => Gamal
    [5] => Ahmed
)
*/
echo "</pre>";


$countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "q" => "Qatar"];

asort($countries);//according to the value
echo "<pre>";
print_r($countries);
/*
Array
(
    [E] => Egypt
    [I] => Iraq
    [q] => Qatar
    [S] => Syria
)
*/
echo "</pre>";



arsort($countries);//according to the value
echo "<pre>";
print_r($countries);
/*
Array
(
    [S] => Syria
    [q] => Qatar
    [I] => Iraq
    [E] => Egypt
)
*/
echo "</pre>";


//======== key sort

ksort($countries);//according to the key
echo "<pre>";
print_r($countries);
/*
Array
(
    [E] => Egypt
    [I] => Iraq
    [S] => Syria
    [q] => Qatar
)
*/
echo "</pre>";

krsort($countries);//according to the key
echo "<pre>";
print_r($countries);
/*
Array
(
    [q] => Qatar
    [S] => Syria
    [I] => Iraq
    [E] => Egypt
)
*/
echo "</pre>";