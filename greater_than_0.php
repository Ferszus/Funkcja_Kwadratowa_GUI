<?php
$x = -40;
while ($x <= 40) {
    $iks = $x + 50;
    $y = (pow($x, 2) + $_POST["b"] * $x + $_POST["c"]) * -1 + 50;
    // $a = pow($x, 2);
    // $b = $x;
    // $c = $_POST['c'];
    // $y = (($a + $b + $c) * - 1) + 50;

    if ($y >= 0 && $y <= 100) {
        echo "<p class='point' style='left:" . $iks . "vw; top: " . $y . "vh;'></p>";
    }
    $x += 0.08;
}
echo "</div>";
$x = $_POST["a"];
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$fx = $a + $b + $c;

$delta = pow($b, 2) - 4 * $a * $c;
$q = ($delta * -1) / (4 * $a);
$p = ($b * -1) / (2 * $a);
echo "<p class='info'>f(x) = " . $a . "x<sup style='font-size: 1rem;'>2</sup> + " . $b . "x + " . $c . "<br>Δ = " . $delta . "<br> p = ", $p . "<br>q = ", $q . "<br>";
if ($delta > 0) {
    $x1 = round(($b * -1 - round(sqrt($delta), 2)) / (2 * $a), 2);
    $x2 = round(($b * -1 + round(sqrt($delta), 2)) / (2 * $a), 2);
    echo "x1 = $x2, x2 = $x1";
} elseif ($delta == 0) {
    $x1 = ($b * -1) / (2 * $a);
    echo "x1 = $x1";
} else {
    echo "Nie ma miejsc zerowych";
}
echo "</p>";
?>
