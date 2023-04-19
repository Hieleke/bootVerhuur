<?php

require "../src/databaseFunctions.php";
session_start();


print_r($_POST);

if (isset($_POST['Registeer'])) {
    // stuurt terug als er data mist
    if (empty($_POST['email']) || empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['Password']) || empty($_POST['PasswordRepeat']) || empty($_POST['phoneNumber'])) {
        header("location: register.php");
        exit;
    }
    // checkt of de ingevoerde passwords matchen
    if ($_POST['Password'] != $_POST['PasswordRepeat']) {
        header("location: register.php");
        exit;
    }
    // maak een nieuwe gebruiker
    db_query("INSERT INTO users (firstName, lastName, email, password, Telefoonnummer) VALUES (\"" . $_POST["firstName"] . "\", \"" . $_POST["lastName"] . "\", \"" . $_POST['email'] . "\", \"" . $_POST["Password"] . "\", \"" . $_POST['phoneNumber'] . "\")");
    header("location: index.php");
}
