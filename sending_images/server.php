<?php
// var_dump($_REQUEST);
// echo "<pre>";
// // var_dump($_POST);
// var_dump($_GET);
// echo "/<pre>";

// $nombre = $_GET["nombre"];
// $edad = $_GET["edad"];
// echo "La persona $nombre tiene $edad Anios de edad";

// echo "<pre>";
// var_dump($_FILES);
// echo "/<pre>";

$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$ruta_a_subir = "images/$basename";

move_uploaded_file($image, $ruta_a_subir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?=$ruta_a_subir ?>" alt="<?=$basename?>"></img>
    
</body>
</html>
