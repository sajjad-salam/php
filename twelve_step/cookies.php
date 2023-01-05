<?php 
setcookie("style","dark");
// setcookie("style","dark",time()*60*60*24*30);//1 month
// setcookie("style","dark",strtotime("+1 month"));
// setcookie("setting","coustum");
setcookie("style","dark","/");

echo $_COOKIE["style"];
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
/*output
Array
(
    [style] => dark
)
you can add 
modify
delete


// style array
*/
setcookie("style[color]","dark","/");
setcookie("style[font]","time","/");

