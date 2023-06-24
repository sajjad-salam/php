        <?php 



        // $friends = [
        //     "AG" => "Ahmed Gamal",
        //     "OM" => "Osama Mohamed",
        //     "MG" => "Mahmoud Gamal",
        //     "AS" => "Ahmed Samy",
        //     "FA" => "Farid Ahmed",
        //     "SM" => "Sayed Mohamed"
        //   ];
        
        //   $friends = array_chunk($friends, 2, true);



        //   print_r($friends);
        // Output
        //   Array
        //   (
        //     [0] => Array
        //       (
        //         [ag] => Ahmed Gamal
        //         [om] => Osama Mohamed
        //       )
        //     [1] => Array
        //       (
        //         [mg] => Mahmoud Gamal
        //         [as] => Ahmed Samy
        //       )
        //     [2] => Array
        //       (
        //         [fa] => Farid Ahmed
        //         [sm] => Sayed Mohamed
        //       )
        //   )


        // $codes = ["H", "C", "J"];
        // $means = ["HTML", "CSS", "JavaScript"];

        // $codes = array_map("strtolower",$codes);


        // $result=array_combine($codes,$means);

        // print_r($result);

        // Output
        // Array
        // (
        //   [h] => HTML
        //   [c] => CSS
        //   [j] => JavaScript
        // )



        // $friends = [
        //     "Ahmed Gamal" => "AG",
        //     "Osama Mohamed" => "OM",
        //     "Mahmoud Gamal" => "MG",
        //     "Ahmed Samy" => "AS"
        //   ];




        //   $friends = array_flip($friends);


        //   print_r($friends);


        // $nums = [10, 20, 30];


        // $result=array_reduce($nums,function($num1,$num2){
        // return $num1+$num2;
        // });
        // echo $result;
        // $r=array_sum($nums);
        // echo $r;

        // // Output
        // // 60
        // 60





        // $nums = [5, 10, 20, 5, 30, 40];
        // $sum= array_sum(array_filter($nums,function($num){
        //     return $num !=5;
        // }));  

        // echo  $sum;

    // // Output
    // 100


            


//     $chars = ["A", "B", "C", "D", "E"];
// $char = "@@";
// $zero = 0;


// $result=array_merge($chars,array_fill(count($chars),5,str_replace($char,"","@")));



// print_r(


//     $result
// );
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )



// $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// // Write Line Here
// next($names);
// next($names);
// // Write Line Here

// echo current($names) . "<br>"; // "Sayed"

// // Write Line Here
// end($names);

// echo current($names) . "<br>"; // "Ali"

// // Write Line Here
// reset($names);

// echo current($names) . "<br>"; // "Osama"

// // Write Line Here
// end($names);
// prev($names);
// // Write Line Here

// echo current($names) . "<br>"; // "Mahmoud"






// $chars = ["A", "B", "C"];

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )


// array_push($chars,"D");

// array_merge($chars,["D"]);
// array_splice($chars,count($chars),0,"D");

// $chars[]="D";

// print_r($chars);



// $nums = [1, 2, 3, 4, 5, 6];

// $r=array_slice($nums,1,-2);

// print_r($r);

// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )


// $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
// $nums = [4, 5, 6];

// // Write Your Code Here
// array_splice($mix,3,3);
// $mix =array_merge($mix,$nums);

// print_r($mix);

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )



// $arr = ["A"];


// function calculate(... $n){


//     foreach ($n as $key => $value) {
//         $r=$key+1;
//         # code...
//     }
//     return $r;
// }

// echo calculate(...$arr);

// Output
// 5

// $nums = [11, 2, 10, 7, 20, 50];

// // Output
// // 100


// function calc(...$n) {

//     $result = 0;

//     foreach ($n as $kay => $value) {
//         # code...
//         $result +=$value;
//     }
//     return $result;
// }



// echo calc(...$nums);



// $nums = [10, 100, -20, 50, 30];

// // Output
// // 100


// function maximum(...$n)
// {
//     $r=0;
//     foreach ($n as $key => $value) {
//         # code...

//         if ($value>$r) {
//         $r=$value;
//         }

//     }
//     return $r;
    
// }


// echo maximum(...$nums);


$nums = [10, 100, -20, 50, 30];

// Output
// -20

// function minimum(...$n)
// {
//     $r=1000000000000000000000000000000000000000000000;
//     foreach ($n as $key => $value) {
//         # code...

//         if ($value<$r) {
//         $r=$value;
//         }

//     }
//     return $r;
    
// }


// echo minimum(...$nums);





// $chars = ["o", "r", "e", "z", "l", "E"];



// $chars = implode(array_reverse($chars));


// echo $chars;
// Output
// "Elzero"



// $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];


// function oddnumber(...$n)
// {
//     $r=[];
//     foreach ($n as $key => $value) {
//         # code...
//         if (is_string($value)) {
//         continue;
    
//         }
//         if ($value%2==0) {
//         continue;
//         }
//         $r[$key]=$value;
//     }
//     sort($r);
//     print_r($r);
    
// }


// oddnumber(...$mix);

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )

// $nums = [1, 2, 3, 4, 5, 6];

// // Output

// for ($i=0; $i <count($nums) ; $i++) { 
//     $rondo=rand(0,count($nums)-1);
//     $tem= $nums[$i];
//     $nums[$i]=$nums[$rondo];
//     $nums[$rondo]=$tem;
//     # code...
// }


// print_r($nums);
// Every Time The Array Elements Will Be Shuffled


// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )

$title = "E&z\$r0 W\$b Sch00&";


$replace = array( "&","\$","0","\$","00&");
$to = array("l","e","o","e","ool");

$result = str_replace($replace,$to,$title,$co);


echo $result;
echo $co;



// Output
// "Elzero Web School"
// 7
