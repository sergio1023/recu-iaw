<?php

print_r($_POST);

$altura = "";
$longitud1 = "";
$anchura1 = "";
$longitud2 = "";
$anchura2 = "";
$calcular = "";

if (isset($_POST['calcular'])){
    $altura = ($_POST['altura']);
    if(isset($_POST['longitud1'])){
        $longitud1 = ($_POST['longitud1']);}
        if(isset($_POST['anchura1'])){
            $anchura1 = ($_POST['anchura1']);}
            if(isset($_POST['longitud2'])){
                $longitud2 = ($_POST['longitud2']);}
                if(isset($_POST['anchura2'])){
                    $anchura2 =( $_POST['anchura2']);}
}


$A1 = $longitud1 * $anchura1;
$A2 = $longitud2 * $anchura2;
$multiareas = $A1 * $A2;
$resultado = $altura / 3 * ($A1 + $A2 + sqrt($multiareas));
$floatresultado = floatval($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>macetero</title>
</head>
<body>
    <form action="macetero.php" method="post">
        <fieldset>
            <legend>¿Cuánto ocupa esta maceta en tu jardín?</legend>
                <p>
                    Altura: <input type="number" name="altura" value="<?=$altura?>">
                </p><br>
                <h4>Parte superior</h4>
                <p>
                    Longitud: <input type="number" name="longitud1" value="<?=$longitud1?>">
                </p><br>
                <p>
                    Anchura: <input type="number" name="anchura1" value="<?=$anchura1?>">
                </p><br>
                <h4>Parte inferior</h4>
                <p>
                    Longitud: <input type="number" name="longitud2" value="<?=$longitud1?>">
                </p><br>
                <p>
                    Anchura: <input type="number" name="anchura2" value="<?=$anchura2?>">
                </p><br>
            <input type="submit" value="calcular" name="calcular">
        </fieldset>
    </form>
        <?php if (isset($_POST['calcular'])) { ?>
            <?php  echo "Tu maceta ocupa un área de " .  $floatresultado . " m2"?>
        <?php } ?>
</body>
</html>