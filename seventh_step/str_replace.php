<?php
//str_replace
/*
search for a specific word within the text and replace it with another word
*/

echo  str_replace("m","0","sajjadsalamm",$i);//sajjadsala00
echo "<br>";
echo  "replace count is $i";//replace count is 3
echo "<br>";


echo  str_ireplace("M","0","sajjadsalamm",$i);//sajjadsala00//Letters are insensitive
echo "<br>";

?>
<!-- // manual -->
<?php
function stringreplace($st_r, $rep, $strg)
{
    
    for ($i=0; $i < strlen($strg); $i++) { 

        if ($strg[$i]==$st_r) {
            $strg[$i] = $rep;
        }
    }
    return $strg;
}
echo  stringreplace("m", "0", "malamm");
