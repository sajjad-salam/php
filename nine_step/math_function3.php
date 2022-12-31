<?php 
// round

// ceil , floor , round => double value

echo round(5.99) ."<br>";//6
echo round(5.50) ."<br>";//6
echo round(5.60) ."<br>";//5
echo round(5.10) ."<br>";//5



echo round(5.99,1) ."<br>";//5.99=>6
echo round(5.94,1) ."<br>";//5.94=>5.9
echo round(5.995,2) ."<br>";//6



echo round(5.5,1,PHP_ROUND_HALF_DOWN) ."<br>";//5


echo round(5.5,1,PHP_ROUND_HALF_EVEN) ."<br>";//6
echo round(4.5,1,PHP_ROUND_HALF_EVEN) ."<br>";//4


echo round(5.5,1,PHP_ROUND_HALF_ODD) ."<br>";//5
echo round(4.5,1,PHP_ROUND_HALF_ODD) ."<br>";//5



?>