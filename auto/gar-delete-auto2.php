<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-delete-auto2.php</title>
</head>
<body>
<h1>garage delete auto 2</h1>
<p>verwijder auto</p>
<?php
$autoid = $_POST["autoidvak"];

require_once "gar-connect.php";

$autos = $conn->prepare("SELECT * FROM auto WHERE autoid = :autoid");
$autos->execute(["autoid" => $autoid]);

echo "<table>";
foreach ($autos as $auto){
    echo "<tr>";
    echo "<td>" . $auto["autoid"] . "</td>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "</tr>";
}
echo "</table><br/>";

echo "<form action='gar-delete-auto3.php' method='post'>";

echo "<input type='hidden' name='autoidvak' value=$autoid>";

echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "verwijder deze auto. <br/>";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>