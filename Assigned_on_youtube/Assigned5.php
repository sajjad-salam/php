<?php
// $a = 100;
// $b = 200;
// $c = 100;

// if ($b>$a) {
//     if ($b>$c) {
//         if (($a +$c)==$b) {
//             echo "yes";
//         }
//     }
// }




// function check ($a,$b,$c)
// {
//     if ($a>$b) {
//         echo "A Is Larger Than B";
//         # code...
//     }
//     elseif ($a>$c) {
//         # code...
//         echo "A Is Larger Than C";
//     }
//     else {
//         echo "A Is Not Larger Than B Or C";
//     }
// }

// check(100,200,300);
// echo "<br>";
// check(200,100,300);
// echo "<br>";
// check(200,200,100);
// echo "<br>";
// // A Is Not Larger Than B Or C




// $admins = ["Osama", "Ahmed", "Sayed"];

// // Input Name "Osama"

// // // Needed Output
// // "The Request Method Is Post And Username Is Osama"
// // "This Username Osama Is Admin"
// if ($_SERVER["REQUEST_METHOD"]=="POST") {
//     $username=$_POST["user"];
//     echo "The Request Method Is Post And Username Is Osama";
//     $admins = ["Osama", "Ahmed", "Sayed"];
//     if (in_array($username,$admins)) {
//         echo "This Username Osama Is Admin";
//     }

// }




// $a = 30;
// $b = 20;
// $c = 10;

// echo ($a+$b===$c ) ? "A+B=C":(($a+$c===$b) ? "A + C = B" : (($b+$c===$a) ? "B + C = A": "End"));

// // Output
// // "B + C = A"





// $name = "Osama";
// $age = 40;
// $country = "Egypt";



// if ($age>18 && gettype($name)=="string" && $country == "Egypt") {
//     echo "The Age Is Good To Go";
//     echo "<br>";
//     echo "The Name Is Good To Go";
//     echo "<br>";
//     echo "The Country Is Good To Go";
//     echo "<br>";
//     # code...
// }

// // Needed Output
// // "The Age Is Good To Go"
// // "The Name Is Good To Go"
// // "The Country Is Good To Go"





// $genre = "Hack And Slash";



// switch ($genre) {
//     case 'RPG':
//         echo "I Recommend Ys Games";
//         break;
    
//     case 'Hack And Slash':
//         echo "I Recommend Castlevania Games";
//         break;
    
//     case 'FPS':
//         echo "I Recommend Uncharted Games";
//         break;
    
//     case 'Platform':
//         echo "I Recommend Megaman Games";
//         break;
    
//     case 'Puzzle':
//         echo "I Recommend Megaman Games";
//         break;
    
//     default:
//     echo "I Recommend Shadow Of Mordor And Shadow Of War";

//         break;
// }

// // Needed Output
// // "I Recommend Castlevania Games"


// $num_one = 23;
// $num_two = 5;
// $op = "/";

// if ($op=="+") {
//     echo $num_one+$num_two;

// }
// elseif ($op=="-") {
//     echo $num_one-$num_two;
// }
// elseif ($op=="*") {
//     echo $num_one*$num_two;
// }
// elseif ($op=="/") {
//     echo intval($num_one/$num_two) . "<br>";
//     echo $num_one%$num_two;
// }
// else {
//     echo "Unknown Operation ";
// }

// $day = "Sat";



// if ($day=="Sat"|| $day=="sun"|| $day =="Mon") {
//     echo "We Are Open All The Day";
// } 
// elseif ($day=="Tue"||$day=="Wed") {
//     echo "We Are Open From 08:12";
// } 
// elseif ($day=='Thu'|| $day=="Fri") {
//     echo "We Are Closed";
// } 
// else {
//     echo "Unknown Day";
// }



// for ($i=$index; $i >=1 ; $i--) { 
    //     # code...
    //     echo $i . "<br>";
    // }



    $index=0;



    // for ($i=$index; $i <20 ; ) { 
    //     # code...
    //     $i+=2;
    //     echo $i . "<br>";
    // }
    // while ($index < 20) {
    //     # code...
    //     $index+=2;
    //     echo $index. "<br>";
    // }


    // do {
    //     # code...
    //     $index+=2;
    //     echo $index . "<br>";
    // } while ($index < 20);



//     $num = 2;
//     $i = 3;
// while ($num < 520) {

//     if ($num<3) {
//         $num-=1;
//         echo $num. "<br>";
    
//     }
//     $num+=$i;

//     echo $num. "<br>";
//     $i*=2;


//     if ($num == 382 ) {
//     break;
//     }


// }

// // Needed Output
// // 1
// // 4
// // 10
// // 22
// // 46
// // 94
// // 190
// // 382



// $start = 10;
// $end = 0;
// $stop = 3;


// for ($i=$start; $i >=$end ; $i--) { 
//     # code...
//     if ($i == $stop-1) {
//     break;
//     }
//     if ($i <10) {
//         echo "0".  $i. "<br>";

//     }
//     elseif ($i==10) {
//         echo $i. "<br>";
//         # code...
//     }
// }

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03


// $start = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];


// for ($i=0; $i <count($mix) ; $i++) { 
//     # code...
//     if ($mix[$i]== 1) {
//     continue;
//     }
//     elseif (is_numeric($mix[$i])) {
//         echo $mix[$i] . "<br>";
//         # code...
//     }
// }
// // Output
// // 2
// // 3
// // 4


// $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];


// foreach ($money as $name => $value) {
//     # code...
//     echo "the name is  " . $name . " and i need  " . $value . " pound for him " ."<br>";
// }


// // Output
// // "The Name Is Ahmed And I Need 100 Pound From Him"
// // "The Name Is Sayed And I Need 150 Pound From Him"
// // "The Name Is Osama And I Need 100 Pound From Him"
// // "The Name Is Maher And I Need 250 Pound From Him"




// $mix = [1, 2, "A", "B", "C", 3, 4];

// $count_num=0;
// $count_char = 0; 


// foreach ($mix as $item) {
//     # code...
//     if (is_numeric($item)) {
//         echo $item . "<br>";
//         $count_num++;
    
//     }else {
//         $count_char++;
//     }
    
// }
// echo $count_num . "<br>";
//     echo $count_char . "<br>";


// // Output
// // 1
// // 2
// // 3
// // 4
// // "4 Numbers Printed"
// // "3 Letters Ignored"





// $nums = [1, 13, 12, 20, 51, 17, 30];



// foreach ($nums as $item) {
//     # code...

//     if ($item % 2 == 0 ) {
//     $result = $item/2; 
//     echo $result . "<br>";
//     }

// }
// // Output
// // 6
// // 10
// // 15


// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];


// for ($i=0; $i <count($names) ; $i++) { 
//     # code...
//     if (in_array($names[$i],["Sayed","Osama"])) {
//     echo $names[$i] . "<br>";
//     }
// }
// // Output
// // "Sayed"
// // "Osama"


// $help_num = 4;
// $nums = [2, 4, 5, 6, 10];

// foreach ($nums as $item => $num) {
//     # code...
//     $parallel_num = $nums[count($nums) - $item  - 1 ];

//     echo $num . ' + '.  $parallel_num . " = ".  $num  +$parallel_num . "<br>" ;
// }


// // Output
// // "2 + 10 = 12"
// // "4 + 6 = 10"
// // "5 + 5 = 10"
// // "6 + 4 = 10"
// // "10 + 2 = 12"