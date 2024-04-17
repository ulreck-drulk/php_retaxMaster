<?php 
$usuario = ["Mr Michi", "Ratmax", "Juan Damian"]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos con PHP</title>
</head>
<body>
    <ul> 
        <?php for ($i=0; $i < 10; $i++): ?>
            <li><?= $i ?> </li>
        <?php endfor; ?> 
<!-- 
        <?php while (false): ?>
            <li>Cualquier cosa</li>
        <?php endwhile; ?> -->

    </ul>
    <ul>
        <?php foreach ($usuario as $username): ?>
            <li><?= $username?> </li>
        <?php endforeach; ?>
    </ul>


</body>
</html>