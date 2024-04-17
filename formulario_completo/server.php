<?php
// var_dump($_POST);
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$ciudad = $_POST["ciudad"];
$pais = $_POST["pais"];
$telefono = $_POST["telefono"];

$name = htmlentities($nombre);
$lastname = htmlentities($apellido);
$city = htmlentities($ciudad);
$country = htmlentities($pais);
$phone = htmlentities($telefono);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi Usuario</title>
</head>
<body>
<p>Nombre: </p>
<?= $name ?>
<p>Apellido: </p>
<?= $lastname ?>
<p>Ciudad: </p>
<?= $city  ?>
<p>Pais: </p>
<?= $country ?>
<p>Telefono: </p>
<?= $phone ?>

    
</body>
</html>
