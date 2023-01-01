<?php
    $handel=fopen("sajjad.text","r");
    

    echo fgets($handel);//sudo /opt/lampp/lampp start 
    echo "<br>";
    echo fread($handel,100);// sudo /opt/lampp/lampp start sudo /opt/lampp/lampp stop 


    fclose($handel);// to close the file after the read 