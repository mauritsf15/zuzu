<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZuZu</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?= time();?>">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="container">
        <header class="row">
            <div class="col-12 col-md-6">
                <p class="head">Zuzu Sushi</p>
            </div>
            <div class="col-4 col-md-2"><a class="btn over-ons" href="index.php#over-ons">Over ons</a></div>
            <div class="col-4 col-md-2"><a class="btn contact" href="index.php#contact">Contact</a></div>
            <div class="col-4 col-md-2"><a class="btn" href="bestel.php">Bestel</a></div>
        </header>
        <br><br>
        <main>
            <div class="row">
                <div class="col-2"></div>
                <form class="col-8 row g-3 needs-validation start-form" action="bestel-2.php" method="post" autocomplete="on">
                    <div class="col-6">
                        <label for="firstname" class="form-label">Voornaam</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Jan" required>
                    </div>
                    <div class="col-6">
                        <label for="lastname" class="form-label">Achternaam</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Bos" required>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="jouwnaam@domein.com" required>
                    </div>
                    <div class="col-12">
                        <label for="streetname" class="form-label">Straatnaam</label>
                        <input type="text" name="streetname" id="streetname" class="form-control" placeholder="Dirkstraat" required>
                    </div>
                    <div class="col-6">
                        <label for="postcode" class="form-label">Postcode</label>
                        <input type="text" name="postcode" id="postcode" class="form-control" placeholder="XXXX00" required>
                    </div>
                    <div class="col-6">
                        <label for="housenumber" class="form-label">Huisnummer</label>
                        <input type="text" name="housenumber" id="housenumber" class="form-control" placeholder="99" required>
                    </div>
                    <div class="col-12">
                        <label for="town" class="form-label">Woonplaats</label>
                        <input type="text" name="town" id="town" class="form-control" placeholder="Amsterdam" required>
                    </div>
                    <div class="col-12 col-md-4"></div>
                    <div class="col-12 col-md-4">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                    <div class="col-12 col-md-4 form-check form-switch">
                        <input class="form-check-input complete-switch form-label" type="checkbox" role="switch" id="switch" checked>
                        <label class="form-check-label" for="switch">Auto-complete</label>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <script src="js/main.js?v=<?= time();?>" type="application/javascript"></script>
</body>
</html>
