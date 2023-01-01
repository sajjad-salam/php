<?php

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1,0,PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num2,1);
echo "<br>";
echo round($num3,0,PHP_ROUND_HALF_DOWN);
echo "<br>";