
<?php 
$dis_cont=["iq"=> 50, "tr"=> 20];
$cont=["iq","tr"];


foreach ($cont as $item) {
    echo "$item<br>";

}
foreach ($dis_cont as $c=> $item) {
    echo "$item<br>";
    echo "$c<br>";
}


foreach ($dis_cont as $cont => $discount) {
    echo "contry name is $cont and discount is $discount <br>";
};