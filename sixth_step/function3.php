<?php
// Function
// Variable Arguments List
// --- func_num_args () ✔ 
// --func_get_arg(1index)
// func get_args ()

function calcaulate()
{
    //echo func_num_args();//number of argument
    //echo func_get_arg(2); // argument number 2 => 6
    //print_r( func_get_args());// all argument
    $result=0;
    foreach (func_get_args() as $item) {
        $result+=$item;
        
    };
    echo $result;
}



calcaulate(10,5,6);//3



//other way method======================================================================

function calcaulate2(...$nums) // ... three point meaning i dont know the number of var
{
    $result=0;
    foreach ($nums as $item) {
        $result+=$item;
        
    };
    echo $result;
}
calcaulate2(20,50,60,80,1);//211


/// note => The three dots break up the array

//forexample
$s=[20,50,60,80,1];
function num(...$numb)
{
    foreach ($numb as $item) {
        echo "$item<br>";
    }
}

// num($s);//error
num(...$s);
//out
// 20
// 50
// 60
// 80
// 1
    ?>