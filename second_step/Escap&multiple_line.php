<?php

echo 'sajjad"salam"'; 
echo "<br>";
echo 'sajjad \'salam\''; // this is escaping for salam out => sajjad 'salam'
echo "<br>";
echo "sajjad \"salam\""; // also   
echo "<br>";
echo "
this is 
not 
multiple line ";
// nl2br for multiple line in server side 😊
// br for all line automaticlly
echo nl2br(
    "
    this 
    is 
    multiple 
    line"
);