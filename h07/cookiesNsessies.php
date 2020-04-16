<?php
session_start();

    $users = array(
    "Yarou" => array("pwd" => "DIO", "rol" => "Administrator"),
    "HOHO" => array("pwd" => "Dewa juubun chikazukanai youi", "rol" => "Gebruiker"),
    "Jotaro" => array("pwd" => "kisama da", "rol" => "Administrator")
);

    if (isset($_GET["loguit"])) {
        $_SESSION = array();
        session_destroy();
}

if (isset($_POST['knop'])
        && isset($users[$_POST["login"]])
        && $users[$_POST["login"]]["pwd"] == $_POST['pwd']) {
        $_SESSION["user"] = array("naam" => $_POST["login"],
                                   "pwd" => $users[$_POST["login"]]['pwd'],
                                   "rol" => $users[$_POST["login"]]['rol']);
        $message = "Welkom ". $_SESSION["user"]["naam"]." met de rol "
                               .$_SESSION["user"]["rol"];

} else {
    $message = "Inloggen";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login pagina</title>
</head>
<body>

<h1><?php echo $message ?></h1>

<p>Yarou / DIO = Administrator</p>
<p>HOHO / Dewa juubun chikazukanai youi = Gebruiker</p>
<p>Jotaro / kisama da = Administrator</p><br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Login: <input type="text"  name="login" value=""><br>
    Password: <input type="password"  name="pwd" value=""><br>
    <input type="submit" name="knop" value="Submit">

</form>
<p><a href="ingelogdscherm.php">website</a></p>
<p><a href="admin.php">Admingedeelte website</a></p>
<p><a href="cookiesNsessies.php">uitloggen</a></p>

</body>
</html>












