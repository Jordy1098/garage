<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-update-auto3.php</title>
</head>
<body>
<h1>gar update auto 3</h1>
<p>gegevens auto wijzigen</p>
<?php
$autoid = $_POST["autoidvak"];
$autokenteken = $_POST["autokentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];

require_once "gar-connect.php";

$sql = $conn->prepare("UPDATE auto SET autokenteken = :autokenteken, automerk = :automerk, autotype = :autotype, autokmstand = :autokmstand WHERE autoid = :autoid");
$sql->execute(["autoid" => $autoid, "autokenteken" => $autokenteken, "automerk" => $automerk, "autotype" => $autotype, "autokmstand" => $autokmstand]);

echo "De auto is gewijzigd. <br/>";
echo "<a href='../index.html'> terug naar het menu </a>";
?>
</body>
</html>