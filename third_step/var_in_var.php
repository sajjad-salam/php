<?php
$s="sajjad";
$$s="salam";
// new var name => sajjad 
// value => "salam"
//like this => $sajjad = "salam

echo "$s" . "<br>";
echo $$s . "<br>"; // salam
//or
echo "$sajjad";

echo "salam ${$s}";// this => $$s = > salam
?>
<!-- ================================== -->
<!-- Assign By Value And By Reference -->
<?php
$q="sajjad";
$a=$q; //this is assign by value 

$d=&$q; // this is assign by refrence 
?>



