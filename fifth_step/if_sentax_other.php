<!-- ================condition==================== -->
<?php
if(10>5) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to page</h1>
    
</body>
</html>
<?php }?>
<!-- =====================other way ======================== -->
<?php
if(10>5) :?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to page</h1>
    
</body>
</html>
<?php endif;?>



    <?php 

    if (10>5):
        echo "hola";

    elseif(10==3):
        echo "hello worls!";

    else:
            echo "ddddd";
    endif;



    ?>




