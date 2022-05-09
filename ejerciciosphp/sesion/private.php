<?php
session_start();

if(!isset($_SESSION['examen']) ||
    $_SESSION['examen'] == 'suspenso') {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privado</title>
</head>
<body>
    <h1>Aquí está el secreto</h1>
</body>
</html>