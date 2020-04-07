<?php
    function celsiusNaarFahrenheit($a, $b, $c)  {
        $d = ($a * $b) + $c;
        echo $d;

    }
    //$a = aantal in Celsius en $d = aantal in Fahrenheit
    celsiusNaarFahrenheit(5, 1.8, 32);

    ?>

<br>
<br>
<br>
<?php
    function delenDoor3($a) {
       if ($a % 3 == 0) {
            $b = "true";
       } else {
            $b = "false";
       }
       echo $a." kan delen door 3 = ".$b;
    }
        //$a = het getal wat je wel of niet kan delen door 3
         delenDoor3(5);
    ?>

<br>
<br>
<br>

<?php
//    $randomIets = "PHP is wel geinig";
//    $length = strlen($randomIets);
//    for ($i=($length-1); $i >= 0; $i--) {
//        echo $randomIets[$i];
//    }

    $randomZin = "PHP is wel geinig";
    echo strrev($randomZin);
    return strrev($randomZin);


?>
