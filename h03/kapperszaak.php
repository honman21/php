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
//
//$kappersagenda["Mevr. Pietersen"] = 9.15;
//$kappersagenda["Mevr. Willems"] = 9.30;
//$kappersagenda[""] = 9.45 ;
//$kappersagenda["Paul van den Broek"] = 10.00;
//$kappersagenda["Karel de Meeuw"] = 10.15;
//$kappersagenda[""] = 10.30;

$kappersagenda = array(
    "Mevr. Pietersen" => 9.15,
    "Mevr. Willems" => 9.30,
    "" => 9.45,
    "Paul van den Broek" => 10.00,
    "Karel de Meeuw" => 10.15,
    " " => 10.30
);

print("De volgende momenten zijn nog beschikbaar:<ul>");
    foreach($kappersagenda as $afspraak => $tijd) {
        if($afspraak == "") {
            print("<li>".$tijd."</li>") ;
    }
}
    if($afspraak == " ") {
        print("<li>".$tijd."</li>") ;
}

    print("</ul>");

?>
</body>
</html>
