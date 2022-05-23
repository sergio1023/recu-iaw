<?php
include('acceso_datos.php');

$datos = $conexion_bd->query("SELECT nombre_cliente FROM cliente");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <div id="content">
    <h1>Saca el nombre del cliente</h1>
    <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $fila){ ?>
                <tr>
                    <td><?=$fila['nombre_cliente']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
</body>
</html>