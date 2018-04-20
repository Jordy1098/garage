<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-delete-klant3.php</title>
</head>
<body>
<h1>garage delete klant 3</h1>
<p>klant verwijderen</p>
<?php

$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];

if ($verwijderen) {
    require_once "gar-connect.php";

    $sql = $conn->prepare("DELETE FROM klant WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    echo "De gegevens zijn verwijderd. <br/>";
} else {
    echo "De gegevens zijn niet verwijderd. <br/>";
}
echo "<a href='../index.html'>Terug naar het menu. </a>";
?>
</body>
</html>