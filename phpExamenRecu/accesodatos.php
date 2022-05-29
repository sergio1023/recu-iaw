<?php
try {
    $conexion_bd = new PDO(
                    'mysql:host=localhost;dbname=jardineria',
                    'profe',
                    'profe'
                );
    $conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//https://www.php.net/manual/en/pdo.setattribute.php

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>