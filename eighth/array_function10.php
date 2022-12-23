<?php
/*
array_reduce

*/
function add($n1,$n2)
{
    echo "$n1<br>";
    echo "$n2 <br>";
    echo $n1+$n2 . "<br>";
    echo "=====================<br>";
    return $n1 + $n2;

}
$nums=[1,5,8,7,9,10];

// echo array_reduce($nums,"add");//40
echo array_reduce($nums,"add",10);//50
echo "=================================<br>";

function mix($n1,$n2)
{
    $r=0;
    if ($n1>$n2) {
        # code...
        $r=$n1;
    }
    else {
        $r=$n2;
    }
    return $r;

}
$nums=[1,5,8,7,9,20];

echo array_reduce($nums,"mix");
