<?php
require "../src/databaseFunctions.php";

session_start();

// checkt of er een user is ingelogd
if(!isset($_SESSION['user'])){

    header("location: login.php");
    exit;
}

if (isset($_POST['bestel'])) {
    // stuurt terug als er iets niet klopt in de bestelling
    if (empty($_POST['dagdeel']) || empty($_POST['boot']) || empty($_POST['reservatie'])) {
        header("location: webshop.php");
        exit;
    }
    // voegt de bestelling toe aan de database
    db_query("INSERT INTO orders (boot, dagdeel, userid, reservationDate) VALUES (\"" . $_POST["boot"] . "\", \"" . $_POST["dagdeel"] . "\", \"" . $_SESSION['user']['id'] . "\", \"" . $_POST['reservatie'] . "\")");
    header("location: besteld.php");
}
