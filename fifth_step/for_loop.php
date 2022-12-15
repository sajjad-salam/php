<!-- 
for loop
for(init ; condition ; increment){
    do this 
}

-->
<?php 



for ($a=0; $a <10 ; $a++) { //optional (init , ++)
echo "$a" . "<br>";
};


$i=1;

for (;;) { 
    if ($i==4) {
        break;
    };
    echo "$i <br>";
    $i++;


};