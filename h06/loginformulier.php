

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website</title>
</head>
<body>
<form action="loginformulier.php" method="post">
    Emailadres <input type="email" name="email"><br>
    Wachtwoord <input type="password" name="wachtwoord"><br>
    <br><input type="submit" name="knop" value="verstuur">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
//$db = "demo";

//mysqli_connect($servername, $username,$wachtwoord);
//mysqli_select_db($db);
//    if (isset(['email'])) {
//        $username=$_POST['email'];
//        $wachtwoord = $_POST['wachtwoord'];
//
//    }

try {
    $conn = new PDO('mysql:host=localhost;dbname=inlogformulier;port=3308', 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
//where email='".$email."' and wachtwoord='".$wachtwoord."' limit 1
$query = "select * from accounts ";
$stmt = $conn->prepare($query) or die ('Error preparing.');
$stmt->execute() or die ('Error executing');

echo '<table>';


while  ($data = $stmt->fetch()) {
    echo '<tr>';
    echo "<td>" . $data['email'] . "</td>";
    echo "<td>" . $data['wachtwoord'] . "</td>";

}

//$email = $_POST['email'];
//$wachtwoord = $_POST['wachtwoord'];

echo '</table>';

?>
</body>
</html>
