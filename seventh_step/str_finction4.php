<?php
/*
String Functions
--strpos (String [ Required], Value [ Required], Start Position [Optional]) Case-Sensitive
strrpos (String [ Required ], Value [Required], Start Position [Optional ]) Case-Sensitive
stripos (String [ Required], Value [Required], Start Position [Optional ]) Case-Letters are insensitive
strripos (String[Required], Value [Required ], Start Position [Optional]) - Case- Letters are insensitive
substr_count (String [Required ] , Value [Required] , Start Position [Optional ] , Length [Optional])
*/
//strpos============================
// searching for the first item you want

var_dump(strpos("sajjad","s"));// 0
var_dump(strpos("sajjad","j"));// 2
var_dump(strpos("sajjad","j",4));//false
var_dump(strpos("sajjad","J"));//false
var_dump(strpos("sajjad","j",-3));//3
var_dump(strpos("sajjad","s",-6));//0


// searching for the last item you want

var_dump(strrpos("sajjad","j"));// 3

var_dump(substr_count("sajjad","j",));//2


// manual
