<?php

session_start();
print_r($_SESSION);

if(isset($_POST["password"])) {
    if($_POST["password"] == "31337") {
        $_SESSION["examen"] = aprobado;
        header('Location: private.php');
        exit;
    } else {
        $_SESSION["examen"] = suspenso;
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Esto es el login</h1>
    <form action="login.php" method="post">
        <input type="password" name="password">
        <input type="submit" value="Enviar"><br/>
        <a href="priv1.php">PRIV1<a/><br/>
        <a href="priv2.php">PRIV2<a/><br/>
        <a href="priv3.php">PRIV3<a/>
    </form>
</body>
</html>