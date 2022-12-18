<?php
// You have a Function that adds two numbers
// It is required not to modify the type of numbers in the Parameters or in the Return
// You can modify the Function itself to ensure that the number to be returned is of type Double and not integer
function calculate(int $num_one, int $num_two) {
    settype($num_one,"double");
    settype($num_two,"double");
    return $num_one + $num_two;
}

  echo calculate(20, 10); // 30
  echo gettype(calculate(20, 10)); // Double

