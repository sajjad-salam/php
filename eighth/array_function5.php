<?php
    /*
    array_merge
    array_replace
    array_rand
    shuffle
    

    */
    $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
    $merge_two = ["One" => "HTML", "Four" => "Python"];
    echo "<pre> ";
    print_r(array_merge($merge_one, $merge_two));
    /*
    output
    Array
    (
    [One] => HTML
    [Two] => CSS
    [Three] => JavaScript
    [Four] => Python
    )
    */
    echo "/pre>";
    $merge_three = [18 => "PHP", 28 => "csS", 30 => "JavaScript"];
    $merge_four = [48 => "Python", 10 => "go"];
    echo "<pre> ";
    print_r(array_merge($merge_three, $merge_four));
    /*
    Array
(
    [0] => PHP
    [1] => csS
    [2] => JavaScript
    [3] => Python
    [4] => go
)
    */
    echo "</pre>";
    $main = ["One" => "PHP", "Two" => "CSs", "Three" => "JavaScript"];
    $replace = ["One" => "HTML", "Four" => "Python"];

    echo "<pre>";
    print_r(array_replace($main, $replace));
    /*
    
    output
    Array
    (
    [One] => HTML
    [Two] => CSs
    [Three] => JavaScript
    [Four] => Python
    )
    */
    echo "</pre> ";


    echo "<pre> ";
    print_r(array_replace($merge_three, $merge_four));
    /*
    Array
    (
        [18] => PHP
        [28] => csS
        [30] => JavaScript
        [48] => Python
        [10] => go
        )
        */
    echo "</pre>";




    $numb = ["a", "d", "c", "d"];
    echo array_rand($numb); // key rand
    echo "<br>";
    echo $numb[array_rand($numb)]; //value rand
    echo "<pre> ";
    print_r(array_rand($numb, 3)); //array rand
    echo "</pre>";


    shuffle($numb);
    echo "<pre> ";
    print_r($numb); //array rand
    echo "</pre>";
