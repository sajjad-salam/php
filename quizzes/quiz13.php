<?php
// Create a Function that prints a message to the user with his name, age, and whether he is available for work or not
// The Function accepts three parameters: Name, Age, and Status. Their names are a, b, and c
// The data types will be String for name, Number for thread, and Boolean for case
// The data will be used randomly inside the Function and they have no specific order
// The data is not arranged and does not have a name that expresses it. You must print the message based on the type of data to be a logical message.
// The working status can be True or False and accordingly the message changes
// Do not modify Parameters or Arguments
// Using the Named Arguments is not appropriate to solve the challenge
  // Needed Output
//   echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
    function check_status($a, $b, $c) {
        $array_of_data=[$a,$b,$c];
            foreach ($array_of_data as $item) {
                if (gettype($item)=="string") {
                    echo "hello $item";
                }
                else {
                    continue;
                }
            }
            foreach ($array_of_data as $item) {
                # code...
                if (gettype($item)=="integer") {
                    echo ", your age is $item ";
                }
                else {
                    continue;
                }
            }
            foreach ($array_of_data as $item) {
                if (gettype($item)=="boolean") {
                    if ($item==true) {
                        echo "You Are Available For Hire";
                    }
                    else {
                        echo "You Are not Available For Hire";
                    }
            }
            }
    }
    check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

