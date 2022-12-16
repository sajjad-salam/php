<?php
$money = ["Ahmed" => 100, "sajjad" => 150, "salam" => 100, "mohammed" => 250];

// Needed Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is sajjad And I Need 150 Pound From Him"
// "The Name Is salam And I Need 100 Pound From Him"
// "The Name Is mohammed And I Need 250 Pound From Him"

foreach ($money as $item => $cost) {
    echo "The Name Is $item And I Need $cost Pound From Him<br>";
}
//out 😜
// The Name Is Ahmed And I Need 100 Pound From Him
// The Name Is sajjad And I Need 150 Pound From Him
// The Name Is salam And I Need 100 Pound From Him
// The Name Is mohammed And I Need 250 Pound From Him