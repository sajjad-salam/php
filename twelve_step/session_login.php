<?php
//session
session_start();

$_SESSION["name"] = "sajjad";

echo $_SESSION["name"]; //sajjad

session_unset(); //delete all session (sajjad => name)

echo $_SESSION["name"]; //nothing

// session_destroy();//delete session an insidehim
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["user"] == "sajjad") {
        $_SESSION["name"] = "sajjad";
        $_SESSION["id"] = 10244;
    }
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
/*
output if input sajjad
Array
(
    [name] => sajjad
    [id] => 10244
)

output if input other
Array
(
)
*/

if (isset($_SESSION["name"])) {
    echo "welcome " . $_SESSION["name"];
} else {


?>


    <form action="" method="post">
        <input type="text" name="user">
        <input type="submit" value="login">
    </form>

<?php } ?>
<br>
<a href="logout.php">logout</a>
<!-- 

in logout.php

session_start();

session_unset();

session_destroy();
-->