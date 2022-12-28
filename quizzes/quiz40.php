<?php
    $title = "E&z\$r0 W\$b Sch00&";

    // $replace = ["&", "\$", "0" , "\$" , "00&"];
    $re=array("&", "\$", "0" , "\$" , "00&");
    $too=array("l","e","o","e","l");

    $s= str_ireplace($re,$too,$title,$co);
    echo $s;
    echo "<br>";
    echo $co;
    // Output
    // "Elzero Web School"
    // 7
