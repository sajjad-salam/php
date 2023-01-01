<?php
    /*
        File System Functions
        - disk_total_space()
        --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
        - disk_free_space() || diskfreespace()
        --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
        - file_exists(Path)
        --- Checks If A File Or Directory Exists
        - filesize(File_Name)
        --- Get Space In Bytes
    */

    echo round(disk_total_space("/home") / 1024 / 1024 / 1024) . "<br>"; //194

    echo round(disk_free_space("/home") / 1024 / 1024 / 1024) . "<br>"; //184

    var_dump(file_exists("1671554141924.jpg")); //bool(true) 

    echo "<br>";
    echo file_exists("1671554141924.jpg"); //1
    
    echo "<br>";
    function fil($file)
    {

        if (file_exists($file) == 1) {
            echo filesize("1671554141924.jpg") / 1024 / 1024 . "<br>"; //1.85 mb

        } else {
            echo "that is error";
        }
    }

    // echo file_exists("1671554141924.jpg");
    fil("1671554141924.jpg"); //1.85 mb
    echo "<br>";

    fil("1fff671554141924.jpg");//that is error
