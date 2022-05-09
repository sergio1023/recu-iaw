<?php
echo"<h1>Hola</h1>";
print("Que tal");

/* Esto es un coment */

$texto = "soy sergio Sec";
print(" ");
print($texto);

echo " ";
echo $texto;

echo "<hr>";
echo "<br>";

print $_GET["tonit"];

echo "<hr>";

echo $_GET["tonit"];

echo "<hr>";
echo "<br>";

print_r($_GET["tonit"]);

echo "<hr>";
echo "<br>";

echo '<h2 style="background: green; color: white;">Dame una lata</h2>';
echo "<hr>";
echo "<br>";
echo '<h1 style="background: red; color:black;">Prefiero dos</h1>';

echo "<hr>";
echo "Vamos a hacer un If";
echo '<br>';

if(isset($_GET["tonit"])){
    echo $_GET["tonit"];
}else{
    echo 'No hay variables en tu url';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1PHP</title>
</head>
<body>
    
</body>
</html>