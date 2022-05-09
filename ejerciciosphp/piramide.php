<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piramide</title>
</head>
<body>
    <form action="piramide.php" method="get">
    <input type="number" id="numero" name="numero">
    <button type="submit" id="boton" name="boton" value="boton">Boton</button>
    </form>
    <?php
    $cadena = null;
    function piramide ($numero){
        for ($i=0; $i <= 16; $i++) { 
            for ($e=0; $e <= $e; $e++) { 
               $cadena .= $numero;
            }echo "<br>";
        }
    }
    ?>
    <?php
$numero = $_GET['numero'];
piramide ($numero);
    ?>
</body>
</html>