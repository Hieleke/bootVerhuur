<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
    <style>
        body {
            background-color: #6495ED;
            overflow: hidden;
        }

        .opmaak {
            display: flex;
            height: 100vh;
            flex-direction: column;
            align-items: center;
            margin-top: 300px;
        }

        .box {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 5px;
            padding: 20px;
            background-color: white;
            margin-bottom: 40px;
        }

        .radio {
            display: flex;
        }
        .radio >*{
            margin: 0 15px;
        }

    </style>
</head>

<body>
    <div class="opmaak">
        <div class="box">
            <form action="checkOrder.php" method="POST">
                <div class="radio">
                    <div class="dagdeel">
                        <div class="form-check">
                            <input class="form-check-input" value="ochtend" type="radio" name="dagdeel" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Ochtend
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="middag" type="radio" name="dagdeel" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Middag
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="avond" type="radio" name="dagdeel" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Avond
                            </label>
                        </div>
                    </div>
                    <div class="boot">
                        <div class="form-check">
                            <input class="form-check-input" value="speedboot" type="radio" name="boot" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Speedboot
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="roeiboot" type="radio" name="boot" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Roeiboot
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" value="jetski" type="radio" name="boot" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Jetski
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <input type="date" name="reservatie">


                <br>
                <br>
                <input type="submit" name="bestel" value="Bestel" class="btn btn-dark">
                <a href="index.php" class="btn btn-dark">Profiel</a>
            </form>

        </div>
    </div>
</body>

</html>