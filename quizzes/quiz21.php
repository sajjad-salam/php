<?php
$str = "<div><b>Elzero</b></div>";

$str= strip_tags($str,"<b></b>");

echo "$str";
// <b>Elzero</b>