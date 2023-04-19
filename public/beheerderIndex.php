<?php
require "../src/databaseFunctions.php";

session_start();

//Check of er een admin is ingelogd
if (!isset($_SESSION['admin'])) {

  header("location: beheerderLogin.php");
  exit;
}

// query voor alle orders
$bestellingen = db_query("SELECT orders.boot, orders.dagdeel, orders.reservationDate, orders.userid, users.firstName, users.lastName FROM orders INNER JOIN users ON users.id=orders.userid");
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
  <style> 
    body {
      background-color: #6495ED;
    }

    .index {
      display: flex;
      height: 100vh;
      flex-direction: column;
      align-items: center;
    }

    .bestelling {
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      padding: 20px;
      border-radius: 10px;
      background-color: white;
      margin: 15px;
    }

    .user {
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-radius: 5px;
      padding: 20px;
      width: 100%;
      background-color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 40px;
    }

    h1 {
      font-size: 30px;
    }

    h3 {
      font-size: 20px;
      font-weight: normal;
    }

    img {
      width: 100px;
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1);
      border-radius: 10px;
    }
    .orders{
      display: flex;
      flex-wrap: wrap;
      width: 60%;
      justify-content: center;

    }
  </style>
</head>

<body>
  <div class="index">
    <div class="user">
      <div class="welkom">
        <img src="https://i.redd.it/o6v0y5mr4fn61.jpg" alt="">
      </div>
      <a href="logout.php" class="btn btn-Danger">Logout</a>
    </div>
    <br>
    <h2>Alle bestellingen:</h2>
    <br>
    <div class="orders">
      <?php
      // laat alle orders zien
      while ($bestelling = $bestellingen->fetch_assoc()) {
        echo "<div class=\"bestelling\">";
        echo "<h4 class = wit> Naam: " . $bestelling["firstName"] . " " .  $bestelling["lastName"] .  "</h4>";
        echo "<h4> Boot: " . $bestelling["boot"] . "</h4>";
        echo "<h4> Dagdeel: " . $bestelling["dagdeel"] . "</h4>";
        echo "<h4> Reservatie datum: " . $bestelling["reservationDate"] . "</h4>";
        echo "</div>";
      }
      ?>
    </div>
  </div>
</body>