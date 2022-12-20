<?php
//parse_str
/*
فائدة هاي الدالة انو تحولك معلومات المستخدم من نص الى مصفوفة
*/
$name=@$_POST["name"];
$email=@$_POST["email"];
$pass=@$_POST["pass"];
$data = "name=$name&email=$email&pass=$pass";
$arr=[];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    parse_str($data,$arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

};

/*out put
Array
(
    [name] => sajjad
    [email] => s@wa
    [pass] => 3495
    )
*/


?>


<form action="" method="POST">
    <p>your name is </p>
    <input type="text" value="" name="name">
    
    <p>your email is :</p>
    <input type="text" value="" name="email">

    <p>your password is :</p>
    <input type="text" value="" name="pass">
    <br> <br> <br>
    <input type="submit" value="              ok              ">
</form>