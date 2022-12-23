<?php
    /*
    current
    next
    prev
    reset
    end

    */
    $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

    echo current($friends);//osama
    echo "<br>";
    echo next($friends);//ahmed
    echo "<br>";
    echo current($friends);//ahmed
    echo next($friends);//sameh
    echo prev($friends);//ahmed
    echo reset($friends);//osama
    echo current($friends);//osama
    echo end($friends);//gamal
    