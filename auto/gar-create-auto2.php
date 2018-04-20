<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jordy Klouwens">
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
</head>
<body>
<h1>garage create auto 2</h1>
<p>een auto toevoegen aan het tabel</p>
<?php
$klantid = $_POST["klantid"];
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("INSERT INTO auto VALUES (:autokenteken, :automerk, :autotype, :autokmstand, :klantid, :autoid)");

$sql->execute([
    "klantid" => $klantid,
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand,
    "autoid" => $autoid
]);

echo "De auto is toegevoegd <br/>";
echo "<a href='../index.html'> terug naar het menu </a>";
?>
</body>
</html>