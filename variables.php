<?php 
$usuarios = [
    ["id" => 0, "username"=>"Mr Michi"],
    ["id" => 1, "username"=>"Retax"],
    ["id" => 2, "username"=>"Pancho"],
    ["id" => 3, "username"=>"Juan Ramon"]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar Variables de PHP a JavaScript</title>
</head>
<body>
    <!-- <?php foreach ($usuarios as $user): ?>
        <li> <?=$user ?></li>
    <?php endforeach; ?> -->
    <script>
        let users = JSON.parse('<?= json_encode($usuarios)?>');
        console.log(users);
    </script>
</body>
</html>