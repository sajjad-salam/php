<?php
    $nums = [10, 100, -20, 50, 30];
    function mina(...$n)
    {
        $r=100000;
        foreach ($n as $key => $value) {

            if ($r>$value) {
                $r=$value;
            }

        }
        return $r;
    }

    echo mina(...$nums);

    // Output
    // -20