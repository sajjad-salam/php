<?php
// ==============================manual conversion======================================
echo 6+ (int) "5 sajjad"; // 11 without warning bec. we conv. the value
echo "<br>";

echo 6 +(int) 15.5; // 21 integer without 0.5 
echo "<br>";
echo (int) (10.5 + 11.5); // 22 integer 
echo "<br>";
echo gettype((int) (10.5 + 11.5)); // 