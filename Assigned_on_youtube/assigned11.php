<?php 

// date_default_timezone_set("Asia/Riyadh");

// echo date_default_timezone_get() . "<br>";
// echo date("D , d M y - h:i:s A ");
// echo date("l , d F y - h:i:s A ")."<br>";
// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"


// echo date_default_timezone_get() . "<br>";

// $date = "2005-10-02";

// $new_date=strtotime("$date +15 hours 15 minutes 15 secods");


// echo date("Y,  F , l \'\" d \'th\' H:i:s " );
// // Output Needed
// // "Africa/Cairo"
// // "2005, October, Sunday '02nd' 15:15:15"

// $date = "1990-10-01";


// $new_date=strtotime("2023-06-30");

// $diff = $new_date -  strtotime($date);

// $dayes=floor($diff/(24*60*60));
// $years= floor($dayes/365);


// echo 'From Epoch Time Till 1990-10-01 Is Approximately  ' . $dayes ."dayes";
// echo 'From Epoch Time Till 1990-10-01 Is Approximately  ' . $years ."years";



// date_default_timezone_set("Africa/cairo");

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"





// $date = "1990-10-01";
// date_default_timezone_set("Africa/cairo");

// $date=date_create($date);
// $new_date= date_create("2023-06-30");

// $diff= date_diff($new_date,$date);


// $dayes=$diff->format("%a") ;
// $years= floor($dayes/365);
// echo "From Epoch Time Till 1990-10-01 Is Approximately ". $dayes;
// echo "From Epoch Time Till 1990-10-01 Is Approximately ". $years;

// With time() Function
// echo time() . "<br>"; // 1668020233


// $date= new DateTime();
// echo $date -> getTimestamp() . "<br>";




// list($microseconds , $seconds ) = explode(" ",microtime());
// echo $seconds;

// Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233
