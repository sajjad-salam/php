<?php
    $chars = ["A", "B", "C"];
    $chars[]="D";
    $chars[4]="D";
    array_push($chars,"D");
    

    print_r($chars);


    // Output
    // Array
    // (
    // [0] => A
    // [1] => B
    // [2] => C
    // [3] => D
    // )