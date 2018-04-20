<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="author"
          content="Jordy Klouwens">
    <title>gar-update-auto2.php</title>
</head>
<body>
<h1>garage update auto 2</h1>
<p>dit formulier wijzigt auto gegevens</p>
<?php
$autoid = $_POST["autoidvak"];

require_once "gar-connect.php";

$autos = $conn->prepare("SELECT * FROM auto WHERE autoid = :autoid");
$autos->execute(["autoid" => $autoid]);

echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto) {
    echo " autoid:" . $auto["autoid"];
    echo " <input type='hidden' name='autoidvak' ";
    echo " value=' " . $auto["autoid"] . " '> <br/> ";

    echo " autokenteken: <input type='text' ";
    echo " name = 'autokentekenvak' ";
    echo " value = '" . $auto["autokenteken"] . "' ";
    echo " > <br/>";

    echo " automerk: <input type='text' ";
    echo " name = 'automerkvak' ";
    echo " value = '" . $auto["automerk"] . "' ";
    echo " > <br/>";

    echo " autotype: <input type='text' ";
    echo " name = 'autotypevak' ";
    echo " value = '" . $auto["autotype"] . "' ";
    echo " > <br/>";

    echo " autokmstand: <input type='text' ";
    echo " name = 'autokmstandvak' ";
    echo " value = '" . $auto["autokmstand"] . "' ";
    echo " > <br/>";
}
echo "<input type='submit'>";
echo "</form>"
?>
</body>
</html>