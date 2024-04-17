<?php 
$tabla_del_9 = [];
for ($i=1 ; $i <= 10 ; $i++){
    $resultado = 9 * $i;
    $texto = "9 X $i = $resultado";
    array_push($tabla_del_9, $texto);

}
// echo "<pre>";
// echo print_r($tabla_del_9);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buenas Practicas en HTML y PHP</title>
    </head>
    <body>
        
        <ul>
            <?php foreach($tabla_del_9 as $resultado): ?>
                <li><?=$resultado ?> </li>
            <?php endforeach;?>    
        </ul>

    </body>
</html>