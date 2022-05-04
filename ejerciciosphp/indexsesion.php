<?php

print_r($_POST);

session_start();

print_r($_SESSION);

$texto = "";
$numero = "";
$enviar = "";
$lista = "";

if (isset($_POST['enviar'])) {
    $texto = ($_POST['texto']);
    if (isset($_POST['numero'])) {
        $numero = ($_POST['numero']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="texto" value="<?=$texto?>" placeholder="¿Que es lo que quieres?">
        <input type="number" name="numero" value="<?=$numero?>"> <br><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <br>

    <?php if (isset($_POST['enviar'])) { ?>      
    <ul name="lista">
        <li><?php $_SESSION = $texto; ?></li>
        <li><?php $_SESSION = $numero; ?></li>
    </ul>
    <?php } ?>
</body>
</html>