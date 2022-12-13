    <!-- ================operators==================== -->
    <!-- ================ String  Operators==================== -->
    <?php

    //    #######     .=      #######

    $s="sajjad";
    $ss="salam";
    $t="teama";

    echo "{$s}{$ss}{$t}";//sajjad salam teama
    echo "<br>";


    echo $s . $ss . $t  ;//sajjadsalamteama
    echo "<br>";

    define("SAJJAD","3");
    echo $s . $ss . $t  . SAJJAD;//sajjadsalamteama3

    echo "<br>";

    $a="sajjad ";
    $a.="salam ";// $a = $a + salam
    $a.="teama"; //$a = $a +teama  => sajjad salam teama 

    echo $a;

