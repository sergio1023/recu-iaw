<?php
session_start();

if(!isset($_SESSION['EXAMENIAW2021']) || $_SESSION['EXAMENIAW2021'] !== "aprobado") {
    header('Location: login.php');
    exit;
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
<h1>PRIV3</h1>
    <br>
    <?php include("page-index.php");?>
</body>
</html>