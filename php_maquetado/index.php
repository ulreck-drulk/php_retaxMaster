<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet">
    <title>Maquetado de formulario</title>
</head>
<body>
    <form action="server.php" method="post">
        
        <label for="nombre">Nombre</label>
        <input name="nombre" id="nombre" type="text"></input>
        <!-- <label for="apellido">apellido</label>
        <input name="apellido" id="apellido" type="text"></input>
        <br></br>
        <label for="e-Mail">e-Mail</label>
        <input name="e-Mail" id="e-Mail" type="email"></input>
        <br></br>
        <label for="direccion">direccion</label>
        <input name="direccion" id="direccion" type="text"></input>
        <br></br>
        <label for="telefono">telefono</label>
        <input name="telefono" id="telefono" type="number"></input>
        <br></br> -->
        <button name="enviar" type="submit">enviar</button>
        
    </form>
    
</body>
</html>