<?php
    session_start();

//    if (isset($_POST['submit'])) {
//        $_SESSION['firstname'] = $_POST['firstname'];
//        $_SESSION['lastname']= $_POST['lastname'];
//        $_SESSION['email'] = $_POST['email'];
//        $_SESSION['street'] = $_POST['streetname'];
//        $_SESSION['number'] = $_POST['housenumber'];
//        $_SESSION['postcode'] = $_POST['postcode'];
//        $_SESSION['town'] = $_POST['town'];
//    } else {
//        header('Location: bestel.php');
//    }
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
                <div class="col-8">
                    <p class="head-two">Kies uw sushi</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
