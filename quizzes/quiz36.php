<?php
    $nums = [10, 100, -20, 50, 30];
    function mix(...$n)
    {
        $r=0;
        foreach ($n as $key => $value) {
            # code...

            if ($value>$r) {
                $r=$value;
                # code...
            }
        }
        return $r;
    }
    echo mix(...$nums);

    // Output
    // 100
