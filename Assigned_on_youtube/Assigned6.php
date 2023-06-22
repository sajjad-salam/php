<?php 

// // Write Function Content Here



// function greeting($name,$gender="") {
//     if ($gender == "Male") {
//         return "hello mr ". $name ;

//     }
//     elseif ($gender=="Female") {
//         # code...
//         return "hello miss ". $name ;
//     }else {
//         return "hello " . $name;
//     }

// }


// echo greeting("sajjad",);


// Needed Output
// echo greeting("Osama", "Male"); // Hello Mr Osama
// echo greeting("Eman", "Female"); // Hello Miss Eman
// echo greeting("Sameh"); // Hello Sameh





// // Write Function Content Here
// function get_arguments() {
//     $arg=func_get_args();
//     $all = implode(" ", $arg);
//     return $all;

// }


// echo get_arguments("I", "Love", "PHP");


// // Needed Output
// // echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
// // echo get_arguments("I", "Love", "PHP"); // I Love PHP



// Write Function Content Here



// function sum_all() {

//     $sum=0;
//     $arg=func_get_args();
//     foreach ($arg as $item) {
//         # code...
//         if ($item==5) {
//         continue;
//         }
//         elseif ($item==10) {
//             # code...
//             $item=20;
//         }
//         $sum+=$item;
//     }
//     return $sum;

// }


// // echo 
// // Needed Output
// echo sum_all(10, 12, 5, 6, 6, 10); // 64
// echo sum_all(5, 10, 5, 10); // 40


// Write Function Content Here


// function multiply() {

//     $arg= func_get_args();
//     $result=1;
//     foreach ($arg as $item) {
//         # code...

//         if (is_string($item)) {
//         continue;
//         }elseif (gettype($item)=="double") {
//             # code...
//             $item=(int)$item;
//         }
//         $result*=$item ;

//     }
//     return $result. "<br>" ;

// }
// // Needed Output
// echo multiply(10, 20); // 200
// echo multiply("A", 10, 30); // 300
// echo multiply(100.5, 10, "B"); // 1000




// function check_status($a, $b, $c) {
//     // Function Code Here

//     $name="";
//     $age="";
//     $status="";
//     if (is_string($a)) {
//     $name=$a;
//     }
//     elseif (is_numeric($a)) {
//         # code...
//         $age=$a;
    
//     }elseif (is_bool($a)) {
//         # code...
//         $status=$a;

//     }




//     if (is_string($b)) {
//         $name=$b;
//         }
//         elseif (is_numeric($b)) {
//             # code...
//             $age=$b;
        
//         }elseif (is_bool($b)) {
//             # code...
//             $status=$b;
    
//         }



//         if (is_string($c)) {
//             $name=$c;
//             }
//             elseif (is_numeric($c)) {
//                 # code...
//                 $age=$c;
            
//             }elseif (is_bool($c)) {
//                 # code...
//                 $status=$c;
        
//             }
// if ($status) {

//     return "hello " . $name . "your age is ". $age . "You Are Available For Hire" . "<br>";
// }else {
//     # code...
//     return "hello " . $name . "your age is ". $age . "You Are Not Available For Hir". "<br>";
// }
    




//   }
  
//   // Needed Output
//   echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"












// Write Function Content Here
// function calculate($num1,$num2,$op="add") {

//     switch ($op[0]) {
//         case 'a':
//             return $num1+$num2 . "<br>";
//             # code...
//             break;
//             case 's':
//                 return $num1-$num2. "<br>";
//                 # code...
//                 break;
//                 case 'm':
//                     return $num1*$num2. "<br>";
//                     break;
//                     default:
//                     return "this operation not found ";
//             break;
//     }

// }
// // Needed Output
// echo calculate(10, 20); // 30
// echo calculate(10, 20, "a"); // 30
// echo calculate(10, 20, "s"); // -10
// echo calculate(10, 20, "subtract"); // -10
// echo calculate(10, 20, "multiply"); // 200
// echo calculate(10, 20, "m"); // 200




// function calculate(int $num_one, int $num_two) {
//     return ($num_one +0.0) + ($num_two+0.0) ;
//   }
  
//   echo calculate(20, 10); // 30
//   echo gettype(calculate(20, 10)); // Double



// $message = "Hello";

// // Write Your Code Here

// $Hello=function ($name) {
// global $message ;
// return $message . " " . $name ;
// };


// echo $Hello("Osama"); // Hello Osama





// Write Function Content Here



// $greet = function () {
// return "Greetings"; 
// };
// // Needed Output
// echo $greet("Osama"); // Greetings