<?php
    $nums = [5, 10, 20, 5, 30, 40];
    function sumu(...$n)
    {
        $r=0;
        foreach ($n as $item) {
            if ($item==5) {
                continue;
            }
            $r+=$item;
        }
        return $r;

    }
    echo array_reduce($nums,"sumu");

    // Output
    // 100