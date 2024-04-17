<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
</head>
<body>
    <form action="server.php" method="post">
        <label> 
        <input placeholder="Juanito" type="text" id="nombre" name="nombre"> Nombre</input>
        </label>
        <br></br>
        <input placeholder="Perenzeno" type="text" id="apellido" name="apellido"> Apellido</input>
        <br></br>
        <input placeholder="Hirule" type="text" id="ciudad" name="ciudad"> Ciudad</input>
        <br></br>
        <input placeholder="Jacinto" type="text" id="pais" name="pais"> Pais</input>
        <br></br>
        <input required placeholder="50583548745" type="number" id="telefono" name="telefono"> Telefono</input>
        <br></br>
        <button type="submit" > Enviar Formulario</button>


    </form>   
</body>
</html>
