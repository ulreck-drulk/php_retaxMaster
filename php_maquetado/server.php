<?php
var_dump((print_r($_POST))); 
echo "<br></br>";
var_dump(($_POST["enviar"]));
echo "<br></br>";
// var_dump(($_POST));
die();
echo "<br></br>";
if (isset($_POST["enviar"]) && !empty($_POST["enviar"])){
    echo "Has enviado todos los datos con exito!";
}
else{
    echo "No enviaste nada de informacion!";
}
