<?php
print($_GET);

$bienvenido = true;
$buscar = '';


if (isset($_GET['buscar']) &&
    $_GET['buscar'] != ''
) {
 $bienvenido = false;
 $buscar = $_GET['buscar'];
 include("accesodatos.php");


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google mejorado</title>
</head>
<body>
    <div>
        <form action="ejercicioGoogle.php" method="get">
                <input type="text" name="buscar" id="buscar" placeholder="Busca lo que quieras" value=<?=$buscar?>>
                <input type="submit" name="buscar" value="Busca!">
        </form>
    </div>
    <div>
    <?php if($bienvenido) { ?>
               Bienvenido!!!!    
        <?php   }    ?> 
    <?php if (isset($_GET['buscar'])) { ?>
        <table>
        <tbody>
            <?php foreach($row as $r){?>
            <tr>
                <td >a</td>
                <td >b</td>
                <td >c</td>
                <td >d</td>
                <td >e</td>
            </tr>
            
            </tbody>
        </table>
    <?php }} ?>      

</div>
</body>
</html>