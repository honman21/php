<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>busreis</title>
</head>
<body>
<?php
$leeftijd = 66;
$bedrag = 10;
if ($leeftijd < 65) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 12) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 3) {
    $bedrag = 0;
}

echo $bedrag;
?>
</body>
</html>
