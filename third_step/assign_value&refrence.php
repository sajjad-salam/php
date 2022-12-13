<?php

//===================Assign By Value And By Reference===================
$d='sajjad';
$a=$d; // this is assign by value ===> Where if the value of D changes, the value of W will "not" change

$w =&$d; //this is assign by refrence ===> Where if the value of D changes, the value of W will change

