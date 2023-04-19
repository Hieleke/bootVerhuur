<?php
// verwijderd alle session data
session_start();

session_destroy();

header("location: index.php");

?>