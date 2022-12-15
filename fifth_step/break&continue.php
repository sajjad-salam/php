
    <?php


$cont = ["iq", "tr", "usa", "su"];
foreach ($cont as $item) {
    echo "$item<br>";

    if ($item == "usa") {
        break; //will loop print usa and  stop here (dont print us) 
    }
}

foreach ($cont as $item) {
    if ($item == "usa") {
        continue; //will loop dont print usa and continue to print us and stop
    }
    echo "$item<br>";
}
