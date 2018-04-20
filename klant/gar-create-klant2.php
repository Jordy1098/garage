<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jordy Klouwens">
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
</head>
<body>
<h1>garage create klant 2</h1>
<p>een klant toevoegen aan het tabel</p>
<?php
$klantid = NULL;
$klantnaam = $_POST["klantnaamvak"];
$klantadres = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("INSERT INTO klant VALUES (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");

$sql->execute([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats,
]);

echo "De klant is toegevoegd <br/>";
echo "<a href='../index.html'> terug naar het menu </a>"
?>
</body>
</html>