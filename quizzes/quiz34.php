<?php
$arr = ["A", "B", "C", "D", "E"];
function cal(...$n)
{
    foreach ($n as $key => $value) {
        $r=$key+1;
    }
    return $r;
};
echo cal(...$arr);

// Output
// 5