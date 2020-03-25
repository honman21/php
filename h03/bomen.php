<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP opdracht</title>
</head>
<body>

<?php

$bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg");

foreach($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}

?>
<br>
<br>
<a href="../index.php">Terug</a>
</body>
</html>