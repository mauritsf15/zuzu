<?php
    session_start();

    $db = new PDO('mysql:host=localhost;dbname=zuzu', 'root', '');

    $sushi = array(0, 1, 3, 0, 4, 1, 0, 1);

    $x = 0;
    forEach($sushi as $value) {
        echo $value;
        echo '<br>';
        if ($value > 0) {
            $query = $db->prepare("SELECT amount FROM sushi WHERE id=$x");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($result);
            if ($result[0]['amount'] > $value) {
                echo 'good';
            }
        }
        echo '<br>';
        $x++;
    }
?>
