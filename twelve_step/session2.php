<?php 
//session
session_id("sfsdfsfs");
session_start();


$_SESSION["name"]="sajjad";
$_SESSION["id"]=5052;



// echo session_id();//sfsdfsfs

isset($_SESSION["viwe"]) ? $_SESSION["viwe"]++:$_SESSION["viwe"]=1;

echo "welcome " . $_SESSION["name"] ."count viwe is " . $_SESSION["viwe"];
echo "<br>";
echo '<a href="about.php">about</a>';
/*
in about.php
<?php 
session_start();
// isset($_SESSION["viwe"]) ? $_SESSION["viwe"]++:$_SESSION["viwe"]=1;

echo "welcome " . $_SESSION["name"] ."count viwe is " . $_SESSION["viwe"];
echo "<br>";
// echo '<a href="about.php">about</a>';