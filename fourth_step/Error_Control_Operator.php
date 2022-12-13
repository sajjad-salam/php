    <!-- ================operators==================== -->
    <!-- ================  Error Control Operator==================== -->
    <?php

    //To prevent the error from appearing

    $a=@$b;//no error and no result
    $a=@$b or die("variable not found");//no error and no result

    $f=@file("sajjad.text") or die("file not found");