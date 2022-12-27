<?php
    $codes = ["H", "C", "J"];
    $means = ["HTML", "CSS", "JavaScript"];
    $r=array_combine($codes,$means);
    echo "<pre>";
    print_r(array_change_key_case($r));
    echo "</pre>";
    /*
    // Output
    Array
    (
    [h] => HTML
    [c] => CSS
    [j] => JavaScript
    )
    */
