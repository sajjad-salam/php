<?php 
//session
session_start();


$_SESSION["name"]="sajjad";
$_SESSION["id"]=5052;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
/*output
Array
(
    [name] => sajjad
    [id] => 5052
)
*/
echo '<a href="test.php">test</a>';

/*
in test.php
<?php 
session_start();//most

echo "welcome ". $_SESSION["name"];//welcome sajjad

?>
*/
