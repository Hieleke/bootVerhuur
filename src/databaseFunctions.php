<?php
require_once('../config/globals.php');

// Functie die een database connectie maakt
function database_connect()
{
    $database = new mysqli(servername, username, password, dbname);

    if ($database->connect_error) {
        die("Connection failed: " . $database->connect_error);
    }
    return $database;
}

// voert de query uit op de database
function db_query($query)
{
    $database = database_connect();
    $result = $database->query($query);
    $database->close();
    return $result;
}
