<?php
    $nums = [11, 2, 10, 7, 20, 50];
    function sumu(...$n)
    {
        $r=0;
        foreach ($n as $key => $value) {
            # code...

            $r+=$value;
        }
        return $r;
    }
    echo sumu(...$nums);

    // Output
    // 100


