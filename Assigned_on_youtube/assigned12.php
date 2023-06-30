<?php 
// $expire=strtotime("+2 months +5 days");

// setcookie("username" , "elzero",$expire ,"/");



setcookie("site[color","blue",0);
setcookie("site[font","swat",0);



echo "<pre>";
print_r($_COOKIE);
echo "</pre>";


setcookie("site[layout","",time()-3600);
// Array
// (
//   [site] => Array
//     (
//       [color] => blue
//       [font] => Swat
//       [layout] => boxed
//     )
// )
// "Your Color Is blue And Your Font Is Swat"
