    <!-- ================operators==================== -->
    <!-- ================ Operator Precedence==================== -->
    <?php

    $a= 10 || false ;//=> $a = (10||false)
    echo $a ; // 1
    
    $a= 10 or false ;//=> ($a=10) or false
    echo $a ; // 10 bec. ($a=10) is true
