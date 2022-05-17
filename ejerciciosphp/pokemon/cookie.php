<?php
$nvisita = 0;
if(!isset($_COOKIE['nvisita'])) {
    $nvisita = 1;
} else {
    $nvisita = $_COOKIE['nvisita'];
    $nvisita = $nvisita * 2;
}
setcookie("nvisita", $nvisita);
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
    <?php if($nvisita == 1) { ?>
        <h1>Según la casilla en la que estas tienes <?=$nvisita?> granos de arroz</h1>
    <?php } else { ?>
        <h1>Según la casilla en la que estas tienes <?=$nvisita?> granos de arroz</h1>
     <?php } ?>   
</body>
</html>