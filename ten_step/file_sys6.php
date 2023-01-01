<?php
    /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode

    --- [a] For Write => Pointer At The End + Create If Not Exists
    --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
    --- [x] Create + Open For Write => Pointer At The Beginning
    --- [x+] Create + Open For Read & Write => Pointer At The Beginning

    - fwrite(File[Required], String[Required], Length[Optional])
    --- Write To An Open File
    --- Length => Maximum Number Of Bytes To Write
    */
    $handel = fopen("salam.text", "w");

    // echo fgets($handel);

    fwrite($handel,"\r\n i love you");
    fwrite($handel,"\r\n iove you");
    fwrite($handel,"\r\n tem");

    fclose($handel);// to close the file after the read 