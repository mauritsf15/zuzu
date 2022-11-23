<?php
    session_start();
    var_dump($_SESSION);
    $test = in_array("firstname", $_SESSION, false);
    echo var_dump($test);
    ?>