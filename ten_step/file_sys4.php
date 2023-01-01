<?php


echo basename("index.php"); //index.php
echo "<br>";
echo basename("index.php", ".php"); //index
echo "<br>";
echo basename(__FILE__); //index.php
echo "<br>";
echo basename(__DIR__); //php
echo "<br>";
echo basename(__LINE__); //12 

echo "<br>";
echo dirname(__FILE__, 1); ///opt/lampp/htdocs/php
echo "<br>";
echo dirname(__FILE__, 2); ///opt/lampp/htdocs/
echo "<br>";
echo dirname(__FILE__, 3); ///opt/lampp/
echo "<br>";

echo realpath(__FILE__); ///opt/lampp/htdocs/php/index.php

echo "<br>";


echo "<pre>";
print_r(pathinfo(__FILE__));
echo (pathinfo(__FILE__,PATHINFO_BASENAME));//index.php
echo "</pre>";
/*output
Array
(
[dirname] => /opt/lampp/htdocs/php
[basename] => index.php
[extension] => php
[filename] => index
)
*/
