<?php 

require "../src/databaseFunctions.php";

session_start();

// checkt of er een user is ingelogd
if (!isset($_SESSION['user'])) {

    header("location: login.php");
    exit;
}

// pak id uit de request
if (!isset($_GET["id"])) {
    header("location: index.php");
    exit;
}

// kijkt of er een order bestaat
$result = db_query("Select userid From orders where id = " . $_GET["id"] );
if ($result->fetch_assoc()["userid"] != $_SESSION['user']["id"]){
    header("location: index.php");
    exit;
}

// verwijder de order
db_query("DELETE FROM `orders` where id = " . $_GET["id"]);
header("location: index.php");

