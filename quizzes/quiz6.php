<?php
$nums = [1, 13, 12, 20, 51, 17, 30];

// Output
// 6
// 10
// 15

foreach ($nums as $item) {
    if ($item%2==0) {
        $r=$item/2;
        echo "$r <br>";
    }
}