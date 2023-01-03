<?php
    echo date_default_timezone_get();
    echo "<br>";
    echo date_default_timezone_set("africa/cairo");//1
    echo "<br>";
    echo date_default_timezone_get();//africa/cairo
    echo "<br>";
    $d=date_create("now");
    echo date_format($d,"y-m-d H:i:s");//23-01-02 15:54:29
    echo "<br>";
    
    date_add($d,date_interval_create_from_date_string("2 months"));
    echo date_format($d,"y-m-d H:i:s");//23-03-02 15:55:50
    
    date_sub($d,date_interval_create_from_date_string("3 months"));
    echo "<br>";
    echo date_format($d,"y-m-d H:i:s");//22-12-02 15:56:51
    date_modify($d,"+1day");
    echo "<br>";
    echo date_format($d,"y-m-d H:i:s");//22-12-03 15:59:04
    echo "<br>";
    
    echo time();//1672667983
    echo "<br>";
    // the interval from 1970 to now
    
    echo ceil(time()/60/60/24/360);//54 year

    echo "<pre>";
    print_r(getdate());
    echo "</pre>";

    /*output
    Array
(
    [seconds] => 45
    [minutes] => 1
    [hours] => 16
    [mday] => 2
    [wday] => 1
    [mon] => 1
    [year] => 2023
    [yday] => 1
    [weekday] => Monday
    [month] => January
    [0] => 1672668105
)
    */

    $da=date_create("2015-10-12");
    echo "<pre>";
    print_r(date_parse($d));
    echo "</pre>";

    echo date_diff($d,$da);
    echo strtotime("day",strtotime("2003-07-15"));
