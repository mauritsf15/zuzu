<?php
    session_start();

    $db = new PDO('mysql:host=localhost;dbname=zuzu', 'root', '');
    $query = $db->prepare('SELECT * FROM sushi');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    if (isset($_POST['submit'])) {
        //$query = $db->prepare('INSERT INTO `customers`(`fname`, `lname`, `email`, `street`, `number`, `city`, `zipcode`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')');

        if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['lastname']= $_POST['lastname'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['street'] = $_POST['streetname'];
            $_SESSION['number'] = $_POST['housenumber'];
            $_SESSION['postcode'] = $_POST['postcode'];
            $_SESSION['town'] = $_POST['town'];
        } else {
            header('Location: bestel.php');
        }

    } else {
        header('Location: bestel.php');
    }
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
                    <p class="head-two">Hoi <?= $_SESSION['firstname']?>, kies uw sushi</p>
                    <p>Elke optie is een portie bestaande uit 8 maki of 4 nigiri. De sushibox is een mix van alles voor 2 personen.</p>
                    <form class="row" action="finish.php" method="post">
                        <?php foreach ($result as $value): ?>
                            <div class="col-12 col-md-6">
                                <label for="<?= $value['id']?>" class="form-label"><?= $value['name'], ' - &euro;', $value['price'] ?></label>
                                <br><label for="<?= $value['id']?>" class="form-label stock">Voorraad: <?= $value['amount']?></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text minus">&minus;</span>
                                    <input type="number" class="form-control" value="0" readonly name="<?= $value['id']?>" id="<?= $value['id']?>" min=0 max=<?= $value['amount']?>>
                                    <span class="input-group-text plus">&plus;</span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-3 d-none d-md-block"></div>
                        <div class="col-12 col-md-6">
                            <input class="btn btn-primary" type="submit" name="submit" value="Bestel!">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="js/order.js?v=<?= time();?>" type="application/javascript"></script>
</body>
</html>
