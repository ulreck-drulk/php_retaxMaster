<?php
$se_hablo_de_bruno = true;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<!--Esto no es correcto! -->
<body>
    
    <h1>Esto no se deberia de hacer</h1>
        <?php if($se_hablo_de_bruno){
            echo "<b>Esto es una vaquita!🐮</b>";
        }

        else{
            echo  "<b>Esto es un Perrito!!🐕</b>";
        }
        ?>
    



    <!--Esto es lo recomendable! -->
    <!--Dejar las secciones de HTML ser ejecutadas como tales no por PHP -->

    <h1>Esto es aceptado</h1>   
        <?php if($se_hablo_de_bruno){ ?>
            <b>Esto es una vaquita!🐮</b>
            <?php } else { ?>
            <b>Esto es un Perrito!!🐕</b>
        <?php }?>            

    <h1>Esto es lo correcto</h1>   
    <?php if ($se_hablo_de_bruno): ?>
        <b>Esto es una vaquita!🐮</b>
    <?php else: ?>
        <b>Esto es un Perrito!!🐕</b>
    <?php endif;?>



     
</body>


</html>