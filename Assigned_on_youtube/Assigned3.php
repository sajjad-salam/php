<<?php 
$var="Elzero Course";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $var?></title>
  </head>
  <body>
    <h1><?php echo $var?></h1>
    <p>Here In <?php echo $var?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $var?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $var?></footer>
  </body>
</html>

<!-- ============================= -->

<?php

$name = "elzero";
$$name = "Web";

echo $elzero;//1
echo $$name;//2
echo "Web";//3
echo ${$name};//4
echo "${$name}";






?>
<!-- ============================= -->





<?php
$a = 200;
$b =& $a;
$a = 100;

echo $b; // 100




?>

<!-- ============================= -->



<?php
// "C:/xampp/htdocs"
// "localhost"
// "C:\WINDOWS"
// "C:/xampp/apache/bin/openssl.cnf"
// phpinfo();
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent, 'Win') !== false) {
    $os = 'Windows';
} elseif (strpos($user_agent, 'Mac') !== false) {
    $os = 'MacOS';
} elseif (strpos($user_agent, 'Linux') !== false) {
    $os = 'Linux';
} else {
    $os = 'Unknown';
}
// echo "<br>";
echo  $os;
echo "<br>";


?>
<!-- ============================= -->

<?php



echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;

?>






