<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Imageness</title>
</head>
<body>

<form action="server.php" method="post" enctype="multipart/form-data" >
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    
    <label for="image">Imagen</label>
    <input type="file" name="image" id="image">

    <button type="submit">Mandar Formulario</button>

</form>

</body>
</html>