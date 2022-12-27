<?php
    $chars = ["A", "B", "C", "D", "E"];
    $char = "@@";
    $len=count($chars)+count($chars);
    $zero = 0;
    $char=substr($char,$zero,1);
    echo $len;
    echo "<pre>";
    print_r(array_pad($chars,$len,$char));
    echo "</pre>";

/*
    // Output
    Array
    (
    [0] => A
    [1] => B
    [2] => C
    [3] => D
    [4] => E
    [5] => @
    [6] => @
    [7] => @
    [8] => @
    [9] => @
    )
    */


