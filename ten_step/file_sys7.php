<?php


$handel=fopen("/opt/lampp/htdocs/php/salam.txt","r");
$l=1;
echo fgets($handel);

while (! feof("salam.txt")) {
    echo "line $l = > ". fgets($handel) . "<br>";
    $l++;
}



// fclose($sa);
// echo "<pre>";
// print_r(file("salam.txt"));
// echo "</pre>";
    /*
Array
(
    [0] => sajjad\

    [1] => salam

    [2] => 

)
    */