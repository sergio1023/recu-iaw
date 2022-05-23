
<?php
include('acceso_datos.php');

$datos = $conexion_bd->prepare("SELECT c.nombre_cliente, p.fecha_pedido FROM cliente c, pedido p WHERE c.codigo_cliente=p.codigo_cliente AND c.codigo_cliente = 7;");
$datos->execute(array('7' => $_GET['codigo_cliente']));
$row = $datos->fetchAll(PDO::FETCH_ASSOC);
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
        <h1>Saca el nombre y su fecha de pedido dependiendo del codigo_cliente</h1>
    <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha pedido</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($row as $fila){ ?>
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