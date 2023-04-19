<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Besteld</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
  <style>
    body {
      background-color: #6495ED;
    }

    .besteld {
      display: flex;
      height: 100vh;
      align-items: center;
    }

    .opmaak {
      text-align: center;
      width: 40%;
      margin: 0 auto;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      padding: 30px;
      border-radius: 15px;
      background-color: #CBDBF9;
    }
  </style>
</head>

<body>
  <div class="besteld">
    <div class="opmaak">
      <h1>Je hebt besteld</h1>

      <a href="index.php" class="btn btn-dark">Bestellingen bekijken</a>
      <a href="webshop.php" class="btn btn-dark">Nog een keer bestellen</a>
    </div>
  </div>
</body>

</html>