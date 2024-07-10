<?php
session_start();
if (isset($_POST['password']) && $_POST['password'] === 'deinPasswort') {
    $_SESSION['authenticated'] = true;
    header('Location: main.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwortgeschützte Seite</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .pre-page {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
            height: 100%;
        }

        .password-input {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="pre-page">
    <form method="POST" action="">
        <input type="password" name="password" class="password-input" placeholder="Passwort eingeben">
        <button type="submit">Einloggen</button>
    </form>
</div>

</body>
</html>
