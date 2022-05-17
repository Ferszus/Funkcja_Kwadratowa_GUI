<?php
if (isset($_POST["oblicz"])) {
    if (empty($_POST["a"]) || empty($_POST["b"]) || empty($_POST["c"])) {
        echo "Wypełnij wszystkie pola";
    } elseif ($_POST["a"] >= 1) {
        require "./greater_than_0.php";
    } elseif ($_POST["a"] <= -1) {
        require "./smaller_than_0.php";
    }
} ?>
