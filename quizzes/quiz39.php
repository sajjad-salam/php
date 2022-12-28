<?php
    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

    function oddnumb(...$n)
    {
        $r=[];
        foreach ($n as $key => $value) {

            if (gettype($value)=="string") {
                continue;
            }
            if (($value%2)==0) {
                continue;
            }
            $r[$key]=$value;
        }
        // return $r;
        echo "<pre>";
        sort(($r));
        print_r(($r));
        echo "</pre>";
    }
oddnumb(...$mix);


// Output
    // Array
    // (
    // [0] => 1
    // [1] => 3
    // [2] => 5
    // [3] => 7
    // )