<?php

$nombre='';
$error_nombre = false;

$averia='';
$error_averia = false;

$urgente='';
$error_urgente = false;

$informacion_correcta= false;

if(isset($_POST['envia'])){

    if(isset($_POST['nombre']) &&
    $_POST['nombre'] != ''){
       $nombre = $_POST['nombre'];
    } else {$error_nombre = true;}

    if(isset($_POST['averia']) &&
    $_POST['averia'] != ''){
       $averia = $_POST['averia'];
    }else{$error_averia = true;}

    if(isset($_POST['urgente']) &&
        $_POST['urgente'] != ''){
          $urgente =  $_POST['urgente'];
    }else {$error_urgente = true;}

    if (  $error_nombre == false &&
          $error_averia == false &&
          $error_urgente == false
          ) {
          $informacion_correcta = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparacion</title>
    <style>
        .error {
            /*color: red;*/
            background-color: red;
        }
    </style>
</head>
<body>
    <?php if ($informacion_correcta == false){ ?>
    <form action="reparacion.php" method="post">
        <input class=" <?=($error_nombre)?'error':'' ?>" type="text" id="" placeholder="nombre" name="nombre" value="<?=$nombre?>">
        <input class=" <?=($error_averia)?'error':'' ?>" type="text" id="" placeholder="Detalla tu averia" name="averia" value="<?=$averia?>"><br/>
        <input type="radio" name="urgente" value="s" <?=($urgente == 's')?'checked':''?> ><span class="<?=($error_urgente)?'error':''?>">Si</span></br>
        <input type="radio" name="urgente" value="n" <?=($urgente == 'n')?'checked':'' ?>><span class="<?=($error_urgente)?'error':''?>">No</span></br>
        <input type="submit" name="envia" value="Enviar info">
    </form>
    <?php }else{ ?>
            <h2>Un técnico le contactará</h2>
    <?php } ?>
</body>
</html>