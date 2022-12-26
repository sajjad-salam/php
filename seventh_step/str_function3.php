<?php

// String Functions
// -chunk_split(String[Required], Length [Optional ] , End [Optional])
// -strlen (String [ Required] )
// --str_split (String [ Required], Length [Optional ] )
// strip_tags (String[Required ], Allowed [Optional])

echo chunk_split("sajjad salam teama",4,"\n");//sajj ad s alam tea ma 
echo "<br>";

echo "<pre>";
print_r(str_split("sajjad",3));
/*
Array
(
    [0] => saj
    [1] => jad
)
*/
echo "</pre>";

//=======================
echo "<h3>salam<b>sajjad</b></h3>";//salamsajjad but bold and h3
echo strip_tags("<h3>salam<b>sajjad</b></h3>");//salamsajjad but without h3 and bold 

echo strip_tags("<h3>salam<b>sajjad</b></h3>","<h3></h3>");//salamsajjad but wit h3 and no bold
/*
(string, $allowed_tags )

*/

// manual
