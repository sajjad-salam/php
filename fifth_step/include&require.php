
        <?php

// ====================include====================
include("test.php"); //$a=5;


echo "$a";//5

echo "continue";//the include continue to the page if no define file
$a=20;  
include("test.php"); //$a=5;
echo "$a";//5 🤷‍♂️ overwrite

// include ones

include_once ("test.php");
echo "$a";//5
$a=20;  
include_once ("test.php");
echo "$a";//20 not  overwrite here 




// ====================require====================

require("test.php");

echo "$a";//5

echo "continue";//the require not continue to the page if no define file

