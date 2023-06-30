

<?php



// echo rand(11,19);


// $friends = ["Osama", "Ahmed", "Sayed", "Ibrahim","Ahmed"];

// Example
// Ibrahim
// Ahmed


// function frend(...$fr) {
//     $r=$fr[array_rand($fr)];
//     $a=$fr[array_rand($fr)];


//     foreach ($fr as $key => $value) {
//         # code...
//         if ($r!=$a) {
//         echo $r[$key];
//         }else {
//             continue;
//         }


//     }
// }

// frend(...$friends);


// $num1 = 11.5; // 11
// echo round($num1,0,PHP_ROUND_HALF_DOWN) . "<br>";
// $num2 = 9.4898; // 9.5
// echo round($num2,1) . "<br>";
// $num3 = -7.5; // -7
// echo round($num3,0,PHP_ROUND_HALF_DOWN) . "<br>";

// $flt=filter_list();

// function show(...$i) {
//     $k=[];
//     foreach ($i as $key => $value) {
//         # code...
//         $k[]=filter_id($value);
//     }
//     $arra= array_combine($k,$i);
//     echo "<pre>";
//     print_r($arra);
//     echo "</pre>";
// }

// show(...$flt);
// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )


// $url1 = "http://www.elz ero.org";
// $url2 = "http://¥elzero.org";
// $url3 = "https://elzero.org";
// $url4 = "https://elzero.o¥rg";




// function che(...$url) {


//     foreach ($url as $key => $value) {
//         # code...
//         if (filter_var($value,FILTER_VALIDATE_URL)) {
//             echo "A Valid URL";
        
//         }
//         else {
//             echo "Not A Valid URL";
//         }

//     }
// }

// che($url1);
// che($url2);
// che($url3);
// che($url4);

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";



function cl(...$url) {

    foreach ($url as $key =>$value) {
        # code...
        $value=filter_var($value,FILTER_SANITIZE_URL);
        echo $value . "<br>";
    }
}

cl($url1);
cl($url2);
cl($url3);
cl($url4);

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org
