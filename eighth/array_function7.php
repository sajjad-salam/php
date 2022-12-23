<?php
/*
array_slice
array_splice
*/
$chars= ["A", "B", "c" ,"D", "E", "F", "G"];
$chars_with_string_keys = ["A" => 1, "8" => 2, "C" => 3];
$chars_with_numeric_keys = [18 => 1, 28 => 2, 38 => 3];
echo '<pre>';
print_r(array_slice ($chars, 2));
/*
Array
(
    [0] => c
    [1] => D
    [2] => E
    [3] => F
    [4] => G
)
*/
echo '</pre>';


echo '<pre>';
print_r(array_slice ($chars, -2));
/*
Array
(
    [0] => F
    [1] => G
)
*/
echo '</pre>';


echo '<pre>';
print_r(array_slice ($chars, 2,3));
/*
Array
(
    [0] => c
    [1] => D
    [2] => E
)
*/
echo '</pre>';



echo '<pre>';
print_r(array_slice ($chars, 2,-2));
/*
Array
(
    [0] => c
    [1] => D
    [2] => E
)
*/
echo '</pre>';





echo '<pre>';
print_r(array_slice ($chars_with_string_keys, 1));
/*
Array
(
    [0] => 2
    [C] => 3
)
*/
echo '</pre>';


echo '<pre>';
print_r(array_slice ($chars_with_numeric_keys, 1 ,2,true));
/*
Array
(
    [28] => 2
    [38] => 3
)
*/
echo '</pre>';

//================= array splice
/*
The difference between them is that the first was preserving the shape of array,
while the second was editing on it
*/

echo '<pre>';
print_r(array_splice ($chars, 1 ,2));
/*
Array
(
    [0] => B
    [1] => c
)
*/
echo '</pre>';

echo '<pre>';
print_r($chars);
/*
Array
(
    [0] => A
    [1] => D
    [2] => E
    [3] => F
    [4] => G
)
*/
echo '</pre>';


echo '<pre>';
print_r(array_splice ($chars, 0 ,-2));
/*
Array
(
    [0] => A
    [1] => D
    [2] => E
)
*/
echo '</pre>';

$a=["a","b","c"];


echo '<pre>';
print_r(array_splice($a,0,1,"s"));
/*
Array
(
    [0] => a
)
*/
echo '</pre>';

echo '<pre>';
print_r($a);
/*
Array
(
    [0] => s
    [1] => b
    [2] => c
)
*/
echo '</pre>';



