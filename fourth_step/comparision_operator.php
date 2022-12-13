<!-- ================operators==================== -->
<!-- ================Comparison Operators==================== -->
<?php
// == equal => to qustion in just value
var_dump(100 == 100) . "<br>";//true
//not equle qustion
var_dump(100 != 100) . "<br>";//false
var_dump(100 == "100") . "<br>"; //true
var_dump(100.0 == 100) . "<br>";//true 
var_dump(100 <> 100) . "<br>";//mening not equle



//================= test identical ===================
// comparison type and value not just value like above

var_dump(100 === 100) . "<br>";//true
var_dump(100 === "100") . "<br>";//false bec. we have string and intager
var_dump(100.0 === 100) . "<br>"; //false bec. we have double with int
var_dump(100 !== 100) . "<br>";//false
var_dump(100 !== "90") . "<br>";//false
var_dump(100 !== 90) . "<br>";//teue


// =========================comparison operator =============================
var_dump(100 > 50) . "<br>";//true
var_dump(100 < 50) . "<br>";//false
var_dump(100 > 100) . "<br>";//false
var_dump(100 >= 100) . "<br>";//true
var_dump(100 >= 110) . "<br>";//false
var_dump(100 < 100) . "<br>";//false
var_dump(100 <= 100) . "<br>";//true
var_dump(100 <=> 200) . "<br>";//-1 bec. true
var_dump(100 <=> 100) . "<br>";//0
var_dump(200 <=> 100) . "<br>";//1
