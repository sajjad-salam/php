<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$s="";
foreach ($chars as $item) {
    # code...
    if (gettype($item)=="integer") {
        # code...
        continue;

    }
    $s.=$item;


    
}
echo ucwords($s);

// Output
// "Elzero"