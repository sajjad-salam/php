<?php

$urls=["http://www.elz ero.org","http://¥elzero.org","https://elzero.org","https://elzero.o¥rg"];
function chekurl(...$url)
{
    
    foreach ($url as $key => $value) {
        if (filter_var($value,FILTER_VALIDATE_URL)) {
            echo " A Valid URL<br>";
        }else {
            echo "Not A Valid URL<br>";
        }
    }
}


chekurl(...$urls);


// Output
/*
"Not A Valid URL"
"Not A Valid URL"
"A Valid URL"
"Not A Valid URL"
*/

