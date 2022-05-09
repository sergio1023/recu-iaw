<?php 
include('acceso_datos.php');

//SELECT with WHERE shorter
$select = $conexion_bd->prepare("SELECT * FROM Respuesta where id_tema = :id;");
$select->execute(array(':id' => $_GET['id']));
$row = $select->fetchAll(PDO::FETCH_ASSOC);

//print_r($row);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETALLE</title>
</head>
<body>
<div id="content">
        <h1>Listado de Respuestas</h1>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Nombre</th>
                    <th>Contenido</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($row as $fila) { ?>
                    <tr>
                    <td><?=$fila['titulo']?></td>
                    <td><?=$fila['nombre']?></td>
                    <td><?=$fila['contenido']?></td>
                    </tr>
                <?php } ?>



            </tbody>
        </table>
    </div>
</body>
</html>