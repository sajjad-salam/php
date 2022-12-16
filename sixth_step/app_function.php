<?php
// The function takes two numbers from the user,
// adds them, and gives a prize to the user according to the two numbers
$prize=["pc","playstation","xbox","laptop","ipad","iphone"];


function get_num( $numb1 ,$numb2)
{
    return $numb1+$numb2;
}
$n1=@$_POST["num1"];
$n2=@$_POST["num2"];

echo $prize[get_num($n1,$n2)];
?>

<form action="" method="POST">
<input type="number" name="num1" >
<input type="number" name="num2" >

<input type="submit" value="submition">

</form>