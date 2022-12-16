<?php
$mix = [1, 2, "A", "B", "C", 3, 4];

// Needed Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
$c=0;
$s=0;
foreach ($mix as $item) {
    if (gettype($item)=="integer") {
        echo "$item<br>";
        $c++;
    }
    if (gettype($item)=="string") {
        $s++;
    }
}
echo " $c Numbers Printed<br>";
echo " $s Letters Ignored";

