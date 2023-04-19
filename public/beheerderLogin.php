<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeheerderLogin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
    <style>
          body {
      background-color: #6495ED;
    }

    .loginField {
      display: flex;
      height: 100vh;
      align-items: center;

    }

    form {
      width: 40%;
      margin: 0 auto;
      padding: 30px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-radius: 15px;
      background-color: #CBDBF9;
    }
    .title{
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
    //kijkt of de admin is ingelogd
    session_start();
    if (isset($_SESSION['admin'])) {
        header("location: beheerderIndex.php");
        exit;
    }
    ?>
    <div class="loginField">
    <form action="CheckBeheerder.php" method="POST">
        <div class="title">
    <h1>Admin Login</h1>
</div>
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" name="login" class="btn btn-primary">Login</button>
      <a href="login.php" class="btn btn-primary">Terug</a>
     
    </form>

  </div>
</body>

</html>

