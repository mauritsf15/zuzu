<?php
    //
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZuZu</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css?v=<?= time();?>" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?= time();?>">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js?v=<?= time();?>" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="container">
        <header class="row">
            <div class="col-12 col-md-6">
                <p class="head">Zuzu Sushi</p>
            </div>
            <div class="col-4 col-md-2"><a class="btn over-ons" href="#over-ons">Over ons</a></div>
            <div class="col-4 col-md-2"><a class="btn contact" href="#contact">Contact</a></div>
            <div class="col-4 col-md-2"><a class="btn" href="bestel.php">Bestel</a></div>
        </header>
        <br><br>
        <main>
            <div id="over-ons" class="row">
                <div class="col-1"></div>
                <div class="col-10 col-md-5">
                    <br>
                    <p class="head-two">Over ons</p>
                    <p class="description">Zuzu Sushi combineert kwaliteit en cultuur sinds 1991.<br>
                    We bevinden ons in de mooie stad Leiden op de Beestenmarkt.<br>
                    U kunt nu ook online bestellen!</p>
                    <br>
                    <a class="ult btn" href="bestel.php">Bestel nu!</a>
                </div>
                <div class="col-1 d-md-none"></div>
                <div class="col-1 d-md-none"></div>
                <div class="col-10 col-md-5">
                    <img class="main-pic" src="img/mainpic.png">
                </div>
                <div class="col-1 d-md-none"></div>
            </div>
            <br>
            <br>
            <div id="contact" class="row">
                <div class="col-1"></div>
                <div class="col-10 col-md-5">
                    <p class="head-two">Contact</p>
                    <p class="description">Wilt u meer informatie over een bepaald product?<br>
                    Wilt u een feestje organiseren?<br>
                    Hebben we uw favoriete sushi niet meer?<br>
                    <b>Neem contact met ons op!</b></p>
                </div>
                <div class="col-1 d-md-none"></div>
                <div class="col-1 d-md-none"></div>
                <div class="col-10 col-md-5">
                    <ul>
                        <li> <a href="mailto:email@zuzusushi.nl">email@zuzusushi.nl</a></li>
                        <li>06 156 242 99</li>
                        <li>Beestenmarkt 2, 4444AZ Leiden</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    <script src="js/main.js?v=<?= time();?>" type="application/javascript"></script>
</body>
</html>