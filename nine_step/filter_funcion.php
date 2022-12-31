<?php 

// filter function


echo "<pre>";
echo filter_list() ;
echo "</pre>";

echo filter_id("boolean") ."<br>" ;//258

$var=true;// true || yes || 1 || on


if (filter_var($var,FILTER_VALIDATE_BOOL)) {
    echo "this is a true ";
} else {
    echo "this is false";
}

if (filter_var($var,258)) {
    echo "this is a true ";
} else {
    echo "this is false";
}






?>