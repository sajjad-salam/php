<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$first_num=0;
$last_num=4;
// Needed  Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"

foreach ($nums as $item) {
    echo "$nums[$first_num] + $nums[$last_num] = ",$nums[$first_num] + $nums[$last_num] . "<br>";
    $first_num++;
    $last_num--;

}
//  Output 😎
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
