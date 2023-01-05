<?php 
if (isset($_COOKIE["style"])) {
    echo "<style> body{ background-color:".$_COOKIE["style"] ."} </style>";
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    setcookie("style",$_POST["bg-color"]);
    header("location:".$_SERVER["REQUEST_URI"]);
    exit();
}


?>

<form action="" method="post">
    <input type="color" name="bg-color">
    <input type="submit" value="ok color">
</form>s