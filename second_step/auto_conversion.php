<?php
echo "=================integer section =================";
echo '<br>';
echo 1 + "2";
echo '<br>';
echo gettype(1+"2");
echo '<br>';
echo 1 + "10 sajjad"; // 11 but exist warning 
// Warning: A non-numeric value encountered in C:\xampp\htdocs\php\index.php on line 6
echo '<br>';
echo gettype(1 + "10 sajjad"); // integer but exist warning 
echo '<br>';
echo 1+'15.5'; // 16.5
echo '<br>';
echo gettype(1+"15.5"); // => double
#=======================
#boolean 
echo '<br>';
echo "=================bolean section =================";
echo '<br>';
echo true ; // 1
echo '<br>';
echo gettype(true); // boolean 
echo '<br>';
echo true + true + true ; // 3 because auto conversion 
echo '<br>';
echo gettype(true + true); // integer 