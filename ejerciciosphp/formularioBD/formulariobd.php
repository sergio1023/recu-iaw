<?php
print_r($_POST);

$ip = "";
$aula = "";
$amd = "";
$intel = "";
$asus = "";
$formulario ="";

$error = false;
$errorip = false;
$erroraula = false;
$errorformulario = false;

if (isset($_POST['enviar'])) {
    if(isset($_POST['ip']) &&
    $_POST['ip'] != ''){
       $ip = $_POST['ip'];
    }else{$errorip = true;}

    if(isset($_POST['aula']) &&
    $_POST['aula'] != ''){
       $aula = $_POST['aula'];
    } else {$erroraula = true;}

    if(isset($_POST['tipo']) &&
        $_POST['tipo'] != ''){
          $formulario =  $_POST['tipo'];
    }else {$errorformulario = true;}

}

include('acceso_datos.php');


$insertar = $conexion_bd->prepare("INSERT INTO clase VALUES ('$ip','$aula','$formulario')");
$insertar->execute();

$datos = $conexion_bd->prepare("SELECT ip, aula, equipo FROM clase");
$row = $datos->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="errores.css" rel="stylesheet" type="text/css">
    <title>Formulario Aula</title>
</head>
<body>
    <?php if ($error == false) {  ?>
    <h1>Registro centro</h1>
    <form action="formulariobd.php" method="post">
        IP<input   <?=($errorip)?'class="error"':'';?> type="text" name="ip" value="<?=$ip?>" placeholder="escribe la IP del aula"><br><br>
        AULA<input   <?=($erroraula)?'class="error"':'';?> type="text" name="aula" value="<?=$aula?>" placeholder="Rellena con nombre de aula"><br><br>
       Tipo de equipo: 
        <input type="radio" name="tipo" value="intel" <?=$intel?>  <?=($formulario == 'intel')?'checked':''?>><span class="<?=($errorformulario)?'error':''?>">INTEL</span>
        <input type="radio" name="tipo" value="amd"  <?=$amd?>  <?=($formulario == 'amd')?'checked':''?>><span class="<?=($errorformulario)?'error':''?>">AMD</span>
        <input type="radio" name="tipo" value="asus"  <?=$asus?>  <?=($formulario == 'asus')?'checked':''?>><span class="<?=($errorformulario)?'error':''?>">ASUS</span><br><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php }  ?>
        <table>
            <thead>
                <tr>
                    <th>IP</th>
                    <th>AULA</th>
                    <th>TIPO DE EQUIPO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($row as $fila){ ?>
                <tr>
                    <td><?=$fila['ip']?></td>
                    <td><?=$fila['aula']?></td>
                    <td><?=$fila['equipo']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>