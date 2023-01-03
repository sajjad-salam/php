<?php
/*
array_shift
array_pop
array_push
array_unshift
*/
$chars=["A","B", "C", "D"];
$first = array_shift($chars) ;
echo '<pre>';
echo ($first);//A
echo '</pre> ';

echo '<pre>';
print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
    [2] => D
)

*/
echo '</pre> ';
//==========array_pop
$last = array_pop($chars) ;
echo '<pre>';
echo ($last);//d
echo '</pre> ';

echo '<pre>';
print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
)

*/
echo '</pre> ';
//==================array push
array_push($chars,"x","y","z");

echo '<pre>';
print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
    [2] => x
    [3] => y
    [4] => z
)

*/
echo '</pre> ';

/*
If you have more than one element
, use the function, but if you have one element, use the following
*/
$chars[]="1";//

echo '<pre>';

print_r($chars);
/*
Array
(
    [0] => B
    [1] => C
    [2] => x
    [3] => y
    [4] => z
    [5] => 1
)
*/
echo '</pre> ';


array_unshift($chars,"a");

#The same push, but here you add to the array (in first)
echo '<pre>';

print_r($chars);
/*
Array
(
    [0] => a
    [1] => B
    [2] => C
    [3] => x
    [4] => y
    [5] => z
    [6] => 1
)
*/
echo '</pre> ';







