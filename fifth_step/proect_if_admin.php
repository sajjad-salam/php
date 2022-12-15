<?php 
$user=@$_POST["user"];
$admins =@ ["sajjad", "salam", "mohammed"];
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    echo "The Request Method Is Post And Username Is $user";
    foreach ($admins as $item) {
        if ($user==$item) {
            echo "This Username $user Is Admin";
        }
    }
};

?>

    <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
    </form>
