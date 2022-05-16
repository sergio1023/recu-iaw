<?php
include('acceso_datos.php');

$datos = $conexion_bd->query("SELECT c.nombre_cliente, p.fecha_pedido FROM cliente c, pedido p WHERE c.codigo_cliente=p.codigo_cliente;");
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
        <h1>Saca el nombre y su fecha de pedido</h1>
    <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha pedido</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $fila){ ?>
                <tr>
                    <td><?=$fila['nombre_cliente']?></td>
                    <td><?=$fila['fecha_pedido']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
</body>
</html>