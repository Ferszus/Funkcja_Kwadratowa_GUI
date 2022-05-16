<?php
$x = -40;
while ($x <= 40) {
    $y = pow($x, 2) + $_POST["b"] * $x + $_POST["c"] + 0;
    $iks = $x + 50;
    if ($y >= 0 && $y <= 100) {
        echo "<p class='point' style='right:" . $iks . "%; top: " . $y . "%;'></p>";
    }
    $x += 0.05;
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
echo "<p style='position: fixed; top: 1px;'>f(x) = " . $a . "x<sup>2</sup> + " . $b . "x + " . $c . "<br>Δ = " . $delta . "<br>√Δ = " . sqrt($delta) . " <br> p = ", $p . "<br>q = ", $q . "<br>";
if ($delta > 0) {
    $x1 = round(($b * -1 - round(sqrt($delta), 2)) / (2 * $a), 2);
    $x2 = round(($b * -1 + round(sqrt($delta), 2)) / (2 * $a), 2);
    echo "x1 = $x1, x2 = $x2";
} elseif ($delta == 0) {
    $x1 = ($b * -1) / (2 * $a);
    echo "x1 = $x1";
} else {
    echo "Nie ma miejsc zerowych";
}
echo "</p>";
?>
