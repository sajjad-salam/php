<?php
    /*
    array_reverse
    array_flip
    count
    in_array
    array_key_exist

    */
    $family = ["osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", [ "Eman", "Noha"]];
echo '<pre>';
print_r(array_reverse($family));
print_r(array_reverse($family,true));// true to are preserved.
/*
Array
(
    [0] => Array
    (
        [0] => Eman
        [1] => Noha
        )
        [1] => Gamal
        [2] => Mahmoud
        [3] => Sameh
        [4] => Ahmed
    [5] => osama
    )
    Array
    (
        [5] => Array
        (
            [0] => Eman
            [1] => Noha
            )
            [4] => Gamal
            [3] => Mahmoud
            [2] => Sameh
            [1] => Ahmed
            [0] => osama
)
*/
echo '/pre>';
$countries = [ "EG" => "Egypt", "KSA" =>"Saudi Arabia", "Sy" => "Syria", "USA" => " United States "] ;
echo '<pre>';
print_r(array_flip($countries));
/*
output
Array
(
    [Egypt] => EG
    [Saudi Arabia] => KSA
    [Syria] => Sy
    [ United States ] => USA
)
*/
echo '</pre>';
$counting= ["A","8","C",[11, 2, 31]];
echo count($counting,);//4 => count just single array
echo count($counting,1);//7 => count multi array

$search= ["1", 2, 3, 4];

if (in_array(1,$search)) {
    # code...
    echo "is found";//is found
}
if (in_array(1,$search,true)) {//because we set the type integer
    echo "is found";//  nothing
}


$courses =["Javascript" => 95,"PHP"=> 108,"HTML"=>68,"CSS"=> 65];

echo "<br>";


if (array_key_exists("PHP",$courses)) {
    echo "the price id " .$courses["PHP"];
}
