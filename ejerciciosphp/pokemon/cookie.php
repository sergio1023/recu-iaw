<?php
$numarroz = 0;
if(!isset($_COOKIE['numarroz'])) {
    $numarroz = 1;
} else {
    $numarroz = $_COOKIE['numarroz'];
    $numarroz = $numarroz * 2;
}
setcookie("numarroz", $numarroz);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies </title>
</head>
<body>
    <?php if($numarroz == 1) { ?>
        <h1>Comienzas con <?=$numarroz?> grano de arroz, pero...</h1>
    <?php } else { ?>
        <h1>Según la casilla en la que estas tienes <?=$numarroz?> granos de arroz</h1>
     <?php } ?>   
</body>
</html>