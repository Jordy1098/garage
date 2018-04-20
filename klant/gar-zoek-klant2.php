<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-zoek-klant2.php</title>
</head>
<body>
<h1>garage zoek op klantid 2</h1>
<p>op klantid zoeken</p>
<?php
$klantid = $_POST["klantidvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT * FROM klant WHERE klantid = :klantid");
$sql->execute(["klantid" => $klantid]);

echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='../index.html'> terug naar het menu </a>";
?>
</body>
</html>