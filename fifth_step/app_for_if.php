<!-- ================condition==================== -->
<?php
// ============================================================
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // echo "hello ", $_POST["usr"];
    // echo "<br>";
    // echo "your lang is ",$_POST["lang"];
    if ($_POST["lang"]=="ar") {
        
        header("Location:ar.php");
        exit();
    };
};
?>
<form action="" method="POST">
    <input type="text" name="usr" id="">
    <select name="lang">
        <option value="ar">Arabic </option>
        <option value="en"> English</option>
        <option value="es">Spanish</option>
    </select>
    <input type="submit" value="go">
</form>