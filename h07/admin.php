<?php

session_start();

if (($_SESSION["user"] && $_SESSION["user"]["rol"] == "Administrator")) {
    echo "<h1>Welkom! ".$_SESSION["user"]["naam"]. " op de website";
    echo "<p><a href='cookiesNsessies.php'>login</a></p>";

} else {
    header('location: cookiesNsessies.php');
}


?>