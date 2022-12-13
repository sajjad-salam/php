    <!-- ================operators==================== -->
    <!-- ================ Logical Operators==================== -->
    <!-- 
    && => two true
    and => two true
    or => one or two true
    || => one or two true
    xor => one true not two
    -->
    <?php
    var_dump(100>50 and 100>80 and 100>70);//true
    echo "<br>";
    var_dump(100>50 and 100<80 and 100>70);//false
    echo "<br>";
    var_dump(100>50 && 100>80 && 100>70);//true
    echo "<br>";
    var_dump(100>50 or 100<80 or 100>70);//true
    echo "<br>";
    var_dump(100>50 || 100<80 || 100>70);//true
    echo "<br>";
    var_dump(100>50 xor 100<80 xor 100>70);//false
    echo "<br>";
    var_dump(100>50 xor 100<80 xor 100<70);//true
    echo "<br>";