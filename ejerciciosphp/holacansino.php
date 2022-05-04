<?php

print_r($_POST);

$campo="";
$veces = "";
$boton="";
$aleatorio0 = mt_rand(0,255);
$aleatorio1 = mt_rand(0,255);
$aleatorio2 = mt_rand(0,255);

if (isset($_POST['boton'])){
    $campo = ($_POST['campo']);
    if(isset($_POST['veces']))
        $veces = ($_POST['veces']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolaCansino</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="campo" value="<?=$campo?>" placeholder="Escribe aquí">
        <input type="number" name="veces" value="<?=$veces?>"><br>
        <input type="submit" name="boton" value="enviar">
    </form>
    <div>
        <?php for($i = 0; $i < $veces;$i++){ ?>
            <span style="background-color:rgb(<?=rand(0,256)?>,<?=rand(0,256)?>,<?=rand(0,256)?>)"><?=$campo?></span><br>
        <?php }?>
    </div>
</body>
</html>