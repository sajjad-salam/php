<?php
function say_hello_to( $someone = null)
{
    echo "hello $someone <br>";
    if ($someone==="sajjad") {
        echo " $someone  you Leader here<br>";
    }
}
$one=@$_POST["name"];
say_hello_to($one);
?>

<form action="" method="POST">
<input type="text" name="name">
<input type="submit" value="submition">

</form>