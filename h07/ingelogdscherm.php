<?php
    session_start();

    if (isset($_SESSION["user"])) {
        echo "Welkom! ".$_SESSION["user"]["naam"]. " op de website";
        echo "<p><a href='cookiesNsessies.php'>login</a></p>";
    } else {
        header('location: cookiesNsessies.php');
    }






?>