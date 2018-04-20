<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-read-auto.php</title>
</head>
<body>
<h1>garage read auto</h1>
<p>alle gegevens</p>
<?php
require_once "gar-connect.php";

$sql = $conn->prepare("SELECT * FROM klant INNER JOIN auto ON klant.klantid = auto.klantid");
$sql->execute();
$result = $sql->fetchAll();

//var_dump($result);


echo "<table>";
foreach ($result as $rij){
    echo "<tr>";
    echo "<td>" . $rij["klantid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["autoid"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='../index.html'> terug naar het menu </a>";
?>
</body>
</html>