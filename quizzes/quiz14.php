<?php
// Create a function that performs arithmetic operations in the name of calculate
// Arithmetic operations are addition, subtraction and multiplication
// The Function accepts three Parameters, the first number, the second number, and the type of arithmetic operation, and name them as you like
// All you have to do is perform the calculation based on the input
// In the event that the person typed the type of arithmetic operation incorrectly, a message appears that this operation does not exist
// The available arithmetic operations are add, subtract, multiply
// A person can write only the first letter of an arithmetic operation, for example a subtract can write s
// If the person did not write the arithmetic operation at all, do the default operation, which is addition
// Needed Output
// echo calculate(10, 20); // 30
// echo calculate(10, 20, "a"); // 30
// echo calculate(10, 20, "s"); // -10
// echo calculate(10, 20, "subtract"); // -10
// echo calculate(10, 20, "multiply"); // 200
// echo calculate(10, 20, "m"); // 200

// Write Function Content Here

function calculate($n1, $n2, $p)
{
    $result = 0;
    switch ($p) {
        case ($p == "a" || $p == "add"):
            $result = $n1 + $n2;
            break;
        case ($p == "s" || $p == "subtract"):
            $result = $n1 - $n2;
            break;
        case ($p == "m" || $p == "multiply"):
            $result = $n1 * $n2;
            break;
        default:
            echo "unknown ";
            break;
    }
    echo $result;
};
calculate(4, 5, "a");
