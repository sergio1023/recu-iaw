<?php
include('acceso_datos.php');

$datos = $conexion_bd->query("SELECT titulo,nombre,etiqueta,creado FROM Tema");

//select titulo,nombre,etiqueta,creado from Tema;
//select titulo,nombre,contenido from Respuesta;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<body>
<div id="content">
<h1>FORO</h1>
        <table>
            <thead>
                <tr>
                    <th>titulo</th>
                    <th>nombre</th>
                    <th>etiqueta</th>
                    <th>fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $fila){ ?>
                <tr>
                    <td><?=$fila['titulo']?></td>
                    <td>
                        <a href="detalle.php?titulo=<?=$fila['titulo']?>">
                            <?=$fila['nombre']?>
                        </a>
                        </td>
                        <td><?=$fila['etiqueta']?></td>
                        <td><?=$fila['creado']?></td>
                        
                </tr>
                <?php } ?>
            </tbody>
        </table>   
                </div>
</body>
</html>