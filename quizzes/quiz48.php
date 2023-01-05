<?php 

  /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */
  
$d=date_create();
// date_timezone_set($d,"");
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get();
echo "<br>";
echo date_format($d,"D,m M y-h:i:s A");
echo "<br>";
echo date_format($d,"l,m F y-h:i:s A");
echo "<br>";
// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"
//=======================================================
$date =date_create("2005-10-02") ;

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get();
echo "<br>";
echo date_format($date,"Y , F , l d  H:i:s");
echo "<br>";
date_add($date,date_interval_create_from_date_string("15 days 15 hour 15 minutes 15 second"));
echo date_format($date,"Y , F , l d  H:i:s");
echo "<br>";
// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:10"
//=======================================================
$date = "1990-10-01";
date_default_timezone_set("Africa/Cairo");
$da=date_create();
$da=date_format($da,"Y-m-d");
function df($date1,$date2)
{
    $d1=substr($date1,0,4);
    $d2=substr($date2,0,4);
    
    $dat_yer=$d2-$d1;
    $date_days=($d2-$d1)*360;
    // return $dat;
    echo "From Epoch Time Till $date1 Is Approximately $dat_yer years <br>";
    echo "From Epoch Time Till $date1 Is Approximately $date_days Days <br>";
    
}
// echo $da;
// print_r(df($date,$da));
// echo df($da,$date);
echo df($date,$da);
// Output Needed
// From Epoch Time Till 1990-10-01 Is Approximately 33 years 
// From Epoch Time Till 1990-10-01 Is Approximately 11880 Days 
//=======================================================

echo "<br>";

// with diff function
$date = date_create("1990-10-01");
date_default_timezone_set("Africa/Cairo");
$da=date_create();
// $da=date_format($da,"Y-m-d");
// $dat=date_create() ;
$daa= date_diff(($date),($da));
echo $daa;
