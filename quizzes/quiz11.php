<?php
// Write Function Content Here
// Create a Function that will sum all the numbers given to it as Arguments
// If you find the number 5 in the numbers, do not combine it with the numbers
// If you find the number 10 in the numbers, change its value to 20 and complete the calculation as it is

// Needed Output
// echo sum_all(10, 12, 5, 6, 6, 10); // 64
// echo sum_all(5, 10, 5, 10); // 40
function sum(...$n)
{
    $su=0;
    foreach ($n as $item) {
        if ($item==5) {
            continue;
        }
        if ($item==10) {
            # code...
            $item=20;
        }
        $su+=$item;
    };
    echo $su;
}
sum(10, 12, 5, 6, 6, 10);//64
sum(5, 10, 5, 10);//40


