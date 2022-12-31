    <?php  
    function che_email($em)
        {
            if (filter_var($em,FILTER_VALIDATE_EMAIL)) {
                
                echo "this is a  email";
            }else {
                echo "this is not email";
            }
        }
        che_email($_GET["email"]);
        
        ?>


<form action="" method="GET">
    <input type="email" name="email">
    <input type="submit"  value="submition" name="sub">
</form>

