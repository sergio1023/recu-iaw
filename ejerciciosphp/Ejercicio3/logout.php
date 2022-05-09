<?php
session_start();

$_SESSION['EXAMENIAW2021'] = 'NO-AUTH';
header('Location: login.php');

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
    <title>Cerrando sesión...</title>
</head>
<body>
    <h1>Cerrando sesión...</h1>
</body>
</html>