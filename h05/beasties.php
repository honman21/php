<?php

//print_r($_POST);

//echo "<img src='img/".$_POST['img'].".jpg'>";

//print_r($_POST['img']);
foreach($_POST['img'] as $aap) {
    echo "<img src='img/".$aap.".jpg'>";

}
?>