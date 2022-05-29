<?php

print("Aquí vamos  a poner la variable post");
print('<br/>');
print_r($_POST);
$bienvenido = true;
$nombre="";
$apellido="";
$edad_20_39="";
$edad_40_59="";
$edad_60_79="";

$errores = false;
$error_nombre = false;
$error_apellido = false;
$error_edad = false;

if (isset($_POST['enviar'])) {
    $bienvenido = false;

    $nombre = (isset($_POST["nombre"]))?$_POST["nombre"]:'';
    if(strlen($nombre) < 4){
        $error_nombre = true;
    }

    $apellido = (isset($_POST["apellido"]))?$_POST["apellido"]:'';
    if(strlen($apellido) < 2){
        $error_apellido = true;
    }

    if(isset($_POST["edad"])){
        ${"edad_".$_POST["edad"]}='checked';
    }
// || significa or
    if($error_nombre || $error_apellido || $error_edad) {
        $errores = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>Formulario</title>
</head>
<body>
    
<?php if($bienvenido) { ?>
        <h1>Bienvenido!!!</h1>
    <?php } ?>
    <div>
        <?php if($errores) { ?>
            <div class="error">
                Los datos introducidos tienen errores
            </div>
        <?php } ?>

    <form action="formulario.php" method="post">
    <fieldset>
        <legend>Info personal</legend>
    <label <?=($error_nombre)?'class="error"':'';?> for="nombre"> Nombre:</label>
    <input <?=($error_nombre)?'class="background-error"':'';?> type="text" name="nombre" id="nombre" value="<?=$nombre?>">
    <label <?=($error_apellido)?'class="error"':'';?> for="apellido">Apellido:</label>
    <input <?=($error_apellido)?'class="background-error"':'';?> type="text" name="apellido" id="apellido" value="<?=$apellido?>">
    </fieldset>
    <fieldset>
    <legend>Edad</legend>
    <label><input type="radio" value="20_39" name="edad" <?=($edad_20_39 == '20_39')?'checked':''?> ><span class="<?=($error_edad)?'error':''?>">20_39</span></label>
    <label><input type="radio" value="40_59" name="edad" <?=($edad_40_59 == '40_59')?'checked':''?> ><span class="<?=($error_edad)?'error':''?>">40_59</span></label>
    <label><input type="radio" value="60_79" name="edad" <?=($edad_60_79 == '60_79')?'checked':''?> ><span class="<?=($error_edad)?'error':''?>">60-79</span></label><br>
    </fieldset>
    <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>