<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">  
    
    <!-- <input type="text" name="nombre" id="nombre"></input>
    <br></br>
    <br></br>    
    <label>nombres</label>
    <input type="text" name="personas[]"></input>
    <input type="text" name="personas[]"></input>
    <input type="text" name="personas[]"></input>
    <button type="submit">Enviar Formulario</button>
    <br></br>
    <br></br>
    <label>personas_detalles</label>
    <input type="text" name="persona[nombre]"></input>
    <input type="num" name="persona[telefono]"></input>
    <input type="email" name="persona[email]"></input> -->

    <!-- <input type="checkbox" name="list1" ></input>
    <input type="checkbox" name="list2" value="Este valor fue aceptado" ></input>
    <input type="checkbox" name="list3" value="Aqui dijeron que SI!"></input> -->
    <label for="Mexico">Mexico</label>
    <input type="radio" name="pais" value="Mexico" id="Mexico"></input>
    <label for="Nicaragua">Nicaragua</label>
    <input type="radio" name="pais" value="Nicaragua" id="Nicaragua"></input>
    <label for="Costa Rica">Costa Rica</label>
    <input type="radio" name="pais" value="Costa Rica" id="Costa Rica"></input>
    
    <button type="submit">Enviar Formulario</button>
    </form>    


</body>
</html>