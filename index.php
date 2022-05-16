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

    <?php require "./script.php"; ?>

</body>
</html>