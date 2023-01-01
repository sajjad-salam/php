<?php



echo "<pre>";
print_r(glob("*.*"));
echo "</pre>";
/*output
    Array
(
    [0] => 1671554141924.jpg
    [1] => index.php
    [2] => sajjad.text
    [3] => salam.txt
)

*/

//in same place
rename(":/opt/lampp/lib/php/salam.txt",":/opt/lampp/lib/php/salaam.txt");

//in other place like cut
rename("/opt/lampp/htdocs/php/salam.txt","/opt/lampp/htdocs/salomi.txt");



//just copy
copy("/opt/lampp/htdocs/php/salam.txt","/opt/lampp/htdocs/salam.txt");

unlink("/opt/lampp/htdocs/php/salam.txt");