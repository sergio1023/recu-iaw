<?php
include('acceso_datos.php');

$datos = $conexion_bd->query("SELECT c.nombre_cliente, p.fecha_pedido, c.codigo_cliente FROM
 cliente c, pedido p WHERE c.codigo_cliente=p.codigo_cliente;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon2</title>
</head>
<body>
    <div id="content">
        <h1>Saca el nombre de todos los clientes y su fecha de pedido</h1>
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
                    <td>
                        <a href="detalle.php?codigo_cliente=<?=$fila['codigo_cliente']?>">
                            <?=$fila['nombre_cliente']?>
                        </a>
                    </td>
                    <td><?=$fila['fecha_pedido']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
     </div>
</body>
</html>