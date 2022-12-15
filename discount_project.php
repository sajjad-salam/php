    <!-- 
In this project, we have a special discount for the country of Iraq
, and a discount also for students or other countries and non-students
, so they have no discounts
-->
<!-- ================form==================== -->
<form action="" method="POST">

<p>your name is : </p>
<input type="text" name="usr" id="">
<br>
<br>
<br>
<p>your country is : </p>
<select name="country" >
    <option value="iraq">iraq</option>
    <option value="turkey">turkey</option>
    <option value="saudi arabia">saudi arabia</option>
    <option value="UAE">UAE</option>
</select>
<br>
<br>
<br>
<p>are you a student:</p>
<select name="stud">
    <option value="true">yes</option>
    <option value="false">no</option>
</select>
<br>
<br>
<br>
<input type="submit" value="ok 😊">
</form>

<!-- =======================   script    ============================= -->

<?php
$name=@$_POST["usr"];
$is_student=@$_POST["stud"];
$contry=@$_POST["country"];
$contry_discount=50;
$price=100;
$student_discount=20;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($contry=="iraq") {
        echo "hello $name welocome in my website";
        echo "<br>";
        echo "<br>";

        echo "You are from Iraq and we have a discount for you ";
            $price-=$contry_discount;
            if ($is_student=="true") {
                echo "<br>";
                echo "<br>";

                echo "You are also a student and you have another discount";
                $price-=$student_discount;
            };
            echo "<br>";
            echo "<br>";
            echo "The total price for you will be  $price";
    } else {
        
        echo "hello $name welocome in my website";
        echo "<br>";
        echo "You are from $contry and we don`t have any discount for your country ";
        echo "<br>";
        if ($is_student=="true") {
            echo "but you have discount for you because you are a student";
            $price-=$student_discount;
        }
        elseif($is_student=="false"){
            echo "And you are not a student, so there is no discount for you either";
        };
        echo "<br>";
        echo "The total price for you will be  $price";
    }
};

?>