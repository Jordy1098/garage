<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-delete-auto3.php</title>
</head>
<body>
<h1>garage delete auto 3</h1>
<p>auto verwijderen</p>
<?php

$autoid = $_POST["autoidvak"];
$verwijderen = $_POST["verwijdervak"];

if ($verwijderen) {
    require_once "gar-connect.php";

    $sql = $conn->prepare("DELETE FROM auto WHERE autoid = :autoid");
    $sql->execute(["autoid" => $autoid]);

    echo "De gegevens zijn verwijderd. <br/>";
} else {
    echo "De gegevens zijn niet verwijderd. <br/>";
}
echo "<a href='../index.html'>Terug naar het menu. </a>";
?>
</body>
</html>