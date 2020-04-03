<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kapperszaak</title>
</head>
<body>
<?php
$kappersagenda = array();
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
if($afspraak == "") {
print("<li>".$tijd."</li>") ;
}
}

?>
</body>
</html>
