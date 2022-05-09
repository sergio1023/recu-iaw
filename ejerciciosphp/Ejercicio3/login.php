<?php
session_start();

//print_r($_SESSION);

    if(isset($_POST["secreto"])) {
        if($_POST["secreto"] == "31337") {
            echo("Secreto correcto");
            $_SESSION["EXAMENIAW2021"] = "aprobado";
            header('Location: priv1.php');
            exit;
        } else {
            $_SESSION["EXAMENIAW2021"] = "NO-AUTH";
        }
    } 
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <!--
        Alumno: Pablo González Troyano
        Curso: 2º ASIR
        Módulo: Implantación de aplicaciones web
        Fecha: 04/03/2022
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Pablo González</title>
</head>
<body>
    <h1>Inicar sesión</h1>
    <form action="login.php" method="post">
        <input type="password" name="secreto" id="secreto">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>