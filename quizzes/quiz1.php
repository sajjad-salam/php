<?php
$start = 10;
$end = 0;
$stop = 3;

for ($i=2; $i < 10; $i++) {
    if ($start==10) {
        echo "$start<br>";
    } 
    $start-=1;
    if ($start<10) {
        echo $end. $start . "<br>";
    }
    if ($start==3) {
        break;
    }
}




// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03
?>