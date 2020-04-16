<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO('mysql:host=localhost;dbname=school2;port=3308', 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$query = "select * from cursist";
$stmt = $conn->prepare($query) or die ('Error preparing.');
$stmt->execute() or die ('Error executing');

echo '<table>';

while  ($data = $stmt->fetch()) {
    echo '<tr>';
    echo "<td>" . $data['cursistnr'] . "</td>";
    echo "<td>" . $data['naam'] . "</td>";
    echo "<td>" . $data['roepnaam'] . "</td>";
    echo "<td>" . $data['straat'] . "</td>";
    echo "<td>" . $data['postcode'] . "</td>";
    echo "<td>" . $data['plaats'] . "</td>";
    echo "<td>" . $data['geslacht'] . "</td>";
    echo "<td>" . $data['geb_datum'] . "</td>";
}


echo '</table>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>

</body>
</html>
