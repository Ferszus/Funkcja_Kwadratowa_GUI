<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcja</title>
</head>
<body>
    
<div id='kratki' style='width: 100vw; height: 100vh; display: flex; padding: 0; margin: 0; align-content: center;flex-direction: column; justify-content: center; align-items: center;'>
    <form method='POST'>
        <input type='number' name='a' placeholder='a' class='a'>
        <input type='number' name='b' placeholder='b' class='b'>
        <input type='number' name='c' placeholder='c' class='c'>
        <input type='submit' name='oblicz' value='oblicz' class="przysick">
    </form>
    <p style='position: fixed;'></p>
    <p style='position: fixed; background-color:red; width: 1px; height: 100%; left: 50%;'></p>
    <p style='position: fixed; background-color:red; width: 100%; height: 1px; top: 50%;'></p>

    <?php

if(isset($_POST['oblicz'])){
    if(empty($_POST['a']) && empty($_POST['b']) && empty($_POST['c'])){
        echo "Wypełnij wszystkie pola";
    }else if($_POST['a'] >=1){

                $x= -40;
        while($x <= 40){
                $y = ((pow($x, 2) + ($_POST['b'] * $x) + $_POST['c']) * - 1) + 50;
                    // $a = pow($x, 2);
                    // $b = $x;
                    // $c = $_POST['c'];
                    // $y = (($a + $b + $c) * - 1) + 50;
                    $iks = $x + 50;
            if ($y >=0 && $y <=100 ){
                 echo "<p class='point' style='left:".$iks."%; top: ".  $y."%;'></p>";
            }
                $x+=0.05;
        }
echo "</div>";
$x= $_POST['a'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$fx = $a + $b + $c;

$delta = pow($b, 2) - (4 * $a * $c);
$q = ($delta * - 1) / (4 * $a);
$p = ($b * - 1) / (2 * $a);
echo "<p style='position: fixed; top: 1px;'>f(x) = ".$a."x<sup>2</sup> + ".$b."x + ".$c."<br>Δ = ". $delta . "<br>√Δ = ".sqrt($delta)." <br> p = ", $p . "<br>q = ", $q . "<br>";
    if($delta > 0){
        $x1 = round((($b * - 1) - round(sqrt($delta), 2)) / (2 * $a), 2);
        $x2 = round((($b * - 1) + round(sqrt($delta), 2)) / (2 * $a), 2);
        echo "x1 = $x1, x2 = $x2";
    }else if ($delta == 0 ){
            $x1 = ($b * - 1) / (2 * $a);
            echo "x1 = $x1";
        }else{
            echo "Nie ma miejsc zerowych";
        }
echo "</p>";
} else if($_POST['a'] <= -1){
    $x= -40;
    while($x <= 40){
        $y = (pow($x, 2) + ($_POST['b'] * $x) + $_POST['c']) + 0;
            $iks = $x + 50;
            if ($y >=0 && $y <=100 ){
                echo "<p class='point' style='right:".$iks."%; top: ".  $y."%;'></p>";
            }
        $x+=0.05;
    }
echo "</div>";
$x= $_POST['a']; 
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$fx = $a + $b + $c;

$delta = pow($b, 2) - (4 * $a * $c);
$q = ($delta * - 1) / (4 * $a);
$p = ($b * - 1) / (2 * $a);
    echo "<p style='position: fixed; top: 1px;'>f(x) = ".$a."x<sup>2</sup> + ".$b."x + ".$c."<br>Δ = ". $delta . "<br>√Δ = ".sqrt($delta)." <br> p = ", $p . "<br>q = ", $q . "<br>";
if($delta > 0){
    $x1 = round((($b * - 1) - round(sqrt($delta), 2)) / (2 * $a), 2);
    $x2 = round((($b * - 1) + round(sqrt($delta), 2)) / (2 * $a), 2);
        echo "x1 = $x1, x2 = $x2";
        }else if ($delta == 0 ){
            $x1 = ($b * - 1) / (2 * $a);
            echo "x1 = $x1";
            }else{
                echo "Nie ma miejsc zerowych";
            }
    echo "</p>";
    }
}
?>

</body>
</html>