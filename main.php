<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hauptseite</title>
</head>
<body>

<h1>Willkommen auf der Hauptseite</h1>
<p>Dies ist die Hauptseite, die nach der Passworteingabe sichtbar wird.</p>

</body>
</html>
