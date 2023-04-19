<?php

require "../src/databaseFunctions.php";

session_start();



print_r($_POST);


if (isset($_POST['login'])) {
    //voert email en ww in en pakt dan de gegevens uit de database
    $sql = "SELECT * FROM users WHERE email='" . $_POST['email'] . "'
    AND password='" . $_POST['password'] . "'";
    $result = db_query($sql);
    echo $result->num_rows;
    // checkt of er een valide gebruiker is
    if ($result->num_rows > 0) {

        $row = $result->fetch_array();

        $_SESSION['user'] = $row;
        header("location: index.php");
    } else {
        echo "0 results";
        header("location: login.php");
    }
}
