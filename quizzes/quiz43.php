<?php

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

function fre(...$fr)
{
    $r = $fr[array_rand($fr)];
    $s = $fr[array_rand($fr)];


    foreach ($fr as $key => $value) {
        if ($r != $s) {
            echo $r[$key];
        } else {
            continue;
        }
    }
}

fre(...$friends);

// echo ($friends[array_rand($friends)]);
// Example
// Ibrahim
// Ahmed
