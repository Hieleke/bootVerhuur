<?php
// checkt of er al een gebruiker ingelogd is
session_start();
if (isset($_SESSION['user'])) {

  header("location: index.php");
  exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registeren</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    body{
      background-color: #6495ED;
    }
     .registerField{
      display: flex;
      height: 100vh;
      align-items: center;

    }

    form{
      width: 40%;
      margin: 0 auto;
      padding: 30px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-radius: 15px;
      background-color: #CBDBF9;
    }
  </style>
</head>

<body>
  <div class="registerField">
    <form action="checkRegister.php" method="POST">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <label  class="form-label">Voornaam</label>
      <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <label  class="form-label">Achternaam</label>
      <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <label  class="form-label">Telefoon nummer</label>
      <input type="text" name="phoneNumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <div class="mb-3">
        <label  class="form-label">Wachtwoord</label>
        <input type="password" name="Password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label class="form-label">Herhaal password</label>
        <input type="password" name="PasswordRepeat" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" name="Registeer" class="btn btn-primary">Registeer</button>
      <a href="login.php" class="btn btn-primary">Ga naar login pagina</a>
    </form>

  </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>