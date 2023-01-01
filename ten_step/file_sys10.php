<?php
    // echo file_get_contents("salam.txt");//sajjad\ salam teama 
    echo get_include_path();//:/opt/lampp/lib/php

    // echo file_get_contents("https://google.com");
    
    // file_put_contents("https://www.page.com/","\r\n hello sajjad",FILE_APPEND);
    // echo file_get_contents("https://www.page.com/");

    $s=file("https://www.page.com/");
    echo $s[413];//Investor Relations
    echo $s[96];//Investor Relations
    echo "<pre>";
    // print_r($s);
    echo "</pre>";