<?php
    /*
    array_chunk
    array_change_key_case
    array_combine
    array_count_values

    */
    $friends = ["Osama", "Ahned", "Sameh", "Mahmoud", "Gamal "];
    echo '<pre>';
    print_r(array_chunk($friends, 2));
    /*
    out
    Array
    (
        [0] => Array
            (
                [0] => Osama
                [1] => Ahned
            )
        [1] => Array
            (
                [0] => Sameh
                [1] => Mahmoud
            )
        [2] => Array
            (
                [0] => Gamal 
            )
    )
    */
    echo '/pres';
    $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "uSA" => "United States"];
    echo '<pre>';
    print_r(array_chunk($countries, 2, true));
    /* 
    out
    Array
    (
        [0] => Array
            (
                [EG] => Egypt
                [KSA] => Saudi Arabia
            )
        [1] => Array
            (
                [Sy] => Syria
                [uSA] => United States
            )
    */



    echo '/pre>';
    echo '<pre> ';
    print_r(array_change_key_case($countries, CASE_LOWER));
    /*
    out
    Array
    (
        [eg] => Egypt
        [ksa] => Saudi Arabia
        [sy] => Syria
        [usa] => United States
        )
        */
    echo '/pre>';
    $keys = ["A", "o", "K"];
    $values = ["Ahmed", "Osana", "Kamal "];

    echo '<pre> ';
    print_r(array_combine($keys, $values));
    /*
    must have the same number of elements
    out
    Array
    (
        [A] => Ahmed
        [o] => Osana
        [K] => Kamal 
        */
        echo '/pre>';
        
        
        echo '<pre> ';
        print_r(array_count_values($values));
        echo '/pre>';

        