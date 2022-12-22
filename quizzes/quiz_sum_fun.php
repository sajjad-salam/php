<?php
function sum(...$n)
{
    $r=0;
    foreach ($n as $item) {
        # code...
        $r+=$item;

    }
    echo "$r";
    
}

echo sum(2,5,8,8);
