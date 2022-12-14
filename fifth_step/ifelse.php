<!-- ================condition==================== -->
<?php
if (10<5) {
    echo "yes";
}
elseif (10==10) {
    echo "maybe";
}
else {
    echo "no";
}
// ============================================================

$page = "home";

if ($page == "about") {
    echo "this is the page";
}
echo "<br>";
// =========================
$lang="arabic";

if ($lang=="arabic") {
    echo "مرحبا";
} elseif ($lang=="english") {
    echo "hello ";
} else {
    echo "no lang";

}
