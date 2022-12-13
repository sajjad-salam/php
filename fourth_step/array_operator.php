    <!-- ================operators==================== -->
    <!-- ================ Array Operators==================== -->
    <?php
    
    $array1=[1=>"a",2=>"b"];
    $array2=[3=>"c",4=>"d"];

    echo "<pre>";
    print_r($array1 +$array2 );

    echo "</pre>";

    $array3=[1=>10,2=>20];
    $array4=[1=>"10",2=>"20"];
    var_dump($array3 == $array4);//true
    echo "<br>";
    $array5=[1=>10,2=>20];
    $array6=[1=>"10",2=>"20"];
    var_dump($array5 != $array6);//false

// indintacil
    echo "<br>";
    $array7=[1=>10,2=>20];
    $array8=[1=>"10",2=>"20"];
    var_dump($array7 === $array8);//false
    echo "<br>";
    $arra9=[1=>10,2=>20];
    $array10=[1=>10,2=>20];
    var_dump($array9 === $array10);//true

   