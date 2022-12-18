<?php
// Create a Function that multiplies all the numbers given as Arguments together
// If the Argument used in the Function is a String, do not use it with numbers
// If the Argument is a Float, convert it to an Integer before multiplication begin


// Needed Output
// echo multiply(10, 20); // 200
// echo multiply("A", 10, 30); // 300
// echo multiply(100.5, 10, "B"); // 1000


// Write Function Content Here
function multi(...$n)
{
    $re=1;
    foreach ($n as $item) {
        if (gettype($item)=="string" ) {
            continue;
        }
        if (gettype($item)=="double") {
            $item=(int) $item;
        }
        $re*=$item;
        

    }
    echo $re . "<br>";
}
multi(10, 20) ;//200
multi("A", 10, 30);//300
multi(100.5, 10, "B");//1000
