<?php
    /*
    array_keys
    array_values
    array_pad
    array_product
    array_sum

    */
    $friends = [1 => "osama", "s" => "Ahmed", " w" => "sameh", "Mahmoud", "Gamal", "osama ", "Eman ", 1, "1"];
    echo "<pre>";
    print_r(array_values($friends));
    /*
    Array
    (
    [0] => osama
    [1] => Ahmed
    [2] => sameh
    [3] => Mahmoud
    [4] => Gamal
    [5] => osama 
    [6] => Eman 
    [7] => 1
    [8] => 1
    )
    */
    echo "</pre>";

    $countries = ["iq" => "iraq", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
    echo "<pre> ";
    print_r(array_keys($countries));
    /*
    output
    Array
    (
        [0] => EG
        [1] => KSA
        [2] => Sy
        [3] => USA
    )
    */
    echo "</pre>";
    $Spad = ["A", "8", "C", "D"];
    echo "<pre>";
    print_r(array_pad($Spad,10,"#"));
    /*
    Array
    (
    [0] => A
    [1] => 8
    [2] => C
    [3] => D
    [4] => #
    [5] => #
    [6] => #
    [7] => #
    [8] => #
    [9] => #
    )
    */
    echo "</pre>";
    $product = [18, 5, 2, 10];
    echo array_product($product);//1800

    $sum = [18, 5, 2, 19];
    echo array_sum($sum);//44
