<?php
    session_start();

    if (!isset($_POST['submit'])) {
        header('Location: bestel.php');
    }

    $sushi = array($_POST[0], $_POST[1], $_POST[2], $_POST[3], $_POST[4], $_POST[5], $_POST[6], $_POST[7]);

    $i = 0;
    $x = 0;

    $db = new PDO('mysql:host=localhost;dbname=zuzu', 'root', '');
    $query = $db->prepare('SELECT * FROM sushi');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    forEach ($result as $value) {
        if ($value['amount'] < $sushi[$value['id']]) {
            header('Location: bestel.php?e=tm');
        }
    }

    $fname = urlencode($_SESSION['firstname']);
    $lname = urlencode($_SESSION['lastname']);
    $email = urlencode($_SESSION['email']);
    $street = urlencode($_SESSION['street']);
    $number = urlencode($_SESSION['number']);
    $town = urlencode($_SESSION['town']);
    $postcode = urlencode($_SESSION['postcode']);

    $sql = "INSERT INTO customers (fname, lname, email, street, hnumber, city, zipcode) VALUES (:fname, :lname, :email, :street, :number, :town, :postcode)";
    $query = $db->prepare($sql);
    $query->bindParam("fname", $fname);
    $query->bindParam("lname", $lname);
    $query->bindParam("email", $email);
    $query->bindParam("street", $street);
    $query->bindParam("number", $number);
    $query->bindParam("town", $town);
    $query->bindParam("postcode", $postcode);
    $query->execute();

    date_default_timezone_set("Europe/Amsterdam");
    $timeNow = date('H:i');
    $time = strtotime($timeNow) + 60*60;
    $newTime = date('H:i', $time);
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
    <main class="row">
        <div class="col-12 time">Verwachte bezorgtijd:<br><?= $newTime ?></div>
        <div class="col-12 col-md-6">
            <p class="head-two">Uw gegevens</p>
            <ul>
                <li><?= $_SESSION['firstname']?> <?= $_SESSION['lastname']?></li>
                <li><?= $_SESSION['email']?></li>
                <li><?= $_SESSION['street']?></li>
                <li><?= $_SESSION['postcode']?> <?= $_SESSION['number']?></li>
                <li><?= $_SESSION['town']?></li>
            </ul>
        </div>
        <div class="col-12 col-md-6">
            <p class="head-two">Uw bestelling</p>
            <ul>
                <?php foreach ($sushi as $value): ?>
                    <?php if ($value > 0): ?>
                        <?php
                        $query = $db->prepare("SELECT `name`, `amount`, `price` FROM `sushi` WHERE id=$x");
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        if ($result[0]['amount'] > $value) {
                            $l = $result[0]['amount'] - $value;
                            $query = $db->prepare("UPDATE `sushi` SET `amount`=$l WHERE id=$x");
                            $query->execute();
                        }
                        ?>
                        <li><?= $result[$i]['name']?> - <?= $value ?> (&euro;<?= $result[$i]['price'] ?>)</li>
                        <?php $i++; ?>
                    <?php endif; ?>
                    <?php $x++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>
<script src="js/main.js?v=<?= time();?>" type="application/javascript"></script>
</body>
</html>