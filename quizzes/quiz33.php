<?php
    $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
    $nums = [4, 5, 6];

    array_splice($mix,3,3);
    
    echo "<pre>";
    print_r(array_merge($mix,$nums));
    echo "</pre>";

    // Write Your Code Here


    // Output
    // Array
    // (
    // [0] => 1
    // [1] => 2
    // [2] => 3
    // [3] => 4
    // [4] => 5
    // [5] => 6
    // [6] => 7
    // [7] => 8
    // [8] => 9
    // )