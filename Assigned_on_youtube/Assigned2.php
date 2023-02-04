<?php 
echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50
echo "<br>";
echo gettype((int) ((int)(15.2 + 14.7) + (10.5 + 10.5)));
echo "<br>";
//===============================


// 100
echo gettype(100);
echo "<br>";
echo get_debug_type(100);
// Method One
// Method Two
// Method Three => Optional



//================================
echo "<br>";
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";
echo "<br>";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"



//=======================
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo "<br>";

// Needed Output
// We
// Love
// Elzero
// Web
// School

//=================
// // Needed Output
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"

echo nl2br( <<< 'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"

now);


//==============================
$something = "Programming";

echo "<br>";

echo <<< "Here"
Hello \PHP\
We Love $something
Here;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Outputas
// Hello \PHP\ We Love Programming
echo "<br>";
//++++++++++++=++++++++++++++++++++++


echo (int)"1Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");

// Needed Output
// 1
// integer
echo "<br>";

//=================================
        $arr=["FrontEnd"=>[
            "html","css"
        ],
        "JS"=>["vuejs"=>[2=>"v2",3=>"v3"],0=>"Reactjs",1=>"Svelte"
    ],
    "backend"=>[0=>"php" ,1=>"mysql" , 2=>"Security"],
    0=>"git",
    1=>"github",
    "testing"=>[0=>"Unit Testing",1=>"End To End",2=>"Integration"],
        ];

        echo "<pre>";
        print_r($arr);
        echo "</pre>";
// Array
// (
//   [FrontEnd] => Array
//     (
//       [0] => HTML
//       [1] => CSS
//       [JS] => Array
//         (
//           [Vuejs] => Array
//             (
//               [2] => v2
//               [3] => v3
//             )

//           [0] => Reactjs
//           [1] => Svelte
//         )
//     )

//   [BackEnd] => Array
//     (
//       [0] => PHP
//       [1] => MySQL
//       [2] => Security
//     )
//   [0] => Git
//   [1] => Github
//   [Testing] => Array
//     (
//       [0] => Unit Testing
//       [1] => End To End
//       [2] => Integration
//     )
// )

echo "<br>";
