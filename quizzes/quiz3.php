<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

//Needed Output by using for
// 2
// 3
// 4 
$start = $mix[0];


for ($i = 0; $i < 1; $i++) {
    foreach ($mix as $item) {
        if ($item == $start) {
            continue;
        }
        if (gettype($item)=="string") {
            continue;
        }
        echo "$item<br>";
    }
}
//Output 😍
// 2
// 3
// 4
