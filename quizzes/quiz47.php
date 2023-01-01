<?php


$urls=["http://www.elz ero.org","http://¥elzero.org","https://elzero.org","https://elzero.o¥rg"];

// FILTER_SANITIZE_URL
function sanitiz(...$url)
{
    
    foreach ($url as $key => $value) {
        $value= filter_var($value,FILTER_SANITIZE_URL);
        echo "$value <br>";
    }

}
sanitiz(...$urls);

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org