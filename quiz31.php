<?php

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names);
next($names);
// Write Line Here

echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names);

echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names);

echo current($names) . "<br>"; // "Osama"

// Write Line Here
end($names);
prev($names);
// Write Line Here

echo current($names) . "<br>"; // "Mahmoud"