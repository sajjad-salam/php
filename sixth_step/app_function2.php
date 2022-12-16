<?php
// A function that takes information from the user and returns it to him

function get_data($contry, $name, $age, $adress)
{
    if ($adress === "") {
        $adress = "private";
    }
    $line = "your country is $contry , and your name is $name your age is $age and adress is $adress <br> ";
    return $line;
}
$name = @$_POST["name"];
$age = @$_POST["age"];
$country = @$_POST["country"];
$adress = @$_POST["adress"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo get_data($country, $name, $age, $adress);
};
//    echo get_data($adress="sa"); // your country is sa , and your name is private your age is private and adress is private 

?>

<form action="" method="POST">
    <p>your name : </p>
    <input type="text" name="name">
    <p>age: </p>
    <input type="text" name="age">
    <p>country: </p>
    <input type="text" name="country">
    <p>adress: </p>
    <input type="text" name="adress">
    <input type="submit" value="submition">

</form>