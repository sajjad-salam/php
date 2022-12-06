<?php

echo gettype(true);
echo '<br>';
echo gettype(10) ;
echo '<br>';
echo gettype(10.5);
echo '<br>';
echo gettype('sajjad') ;
echo '<br>';
$sajjad='hello world';
echo gettype($sajjad);
echo '<br>';
echo gettype(array("sa" => "sajjad" , "sl" => "salam"));
echo '<br>';
echo gettype(["a" , "salam ", 1 , 1.5]);

