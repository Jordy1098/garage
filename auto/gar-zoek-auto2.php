<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-zoek-auto2.php</title>
</head>
<body>
<h1>garage zoek op autoid 2</h1>
<p>op autoid zoeken</p>
<?php
$autoid = null;


$autoid = $_POST["autoidvak"];
$autotype = $_POST["autotypevak"];

require_once "gar-connect.php";

$sql = $conn->prepare("SELECT * FROM auto WHERE autoid = :autoid OR autotype = :autotype");
$sql->bindParam(":autoid", $autoid);
$sql->bindParam(":autotype", $autotype);
$sql->execute();

echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
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