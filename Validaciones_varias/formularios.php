<?php
$is_float = filter_var("Esto es un numero de 5 digitos 457845.1", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
$is_int =  filter_var("Estos no es un INt",FILTER_VALIDATE_INT);
$is_email = filter_var("correo@correo.com",FILTER_VALIDATE_EMAIL);
$is_url = filter_var("https://roger.chamorro.com",FILTER_VALIDATE_URL);
$is_ip = filter_var("192.168.1.1",FILTER_VALIDATE_IP);

echo "<pre>";
var_dump($is_int);
echo "<br></b>";
var_dump($is_float);
echo "<br></b>";
var_dump($is_email);
echo "<br></b>";
var_dump($is_url);
echo "<br></b>";
var_dump($is_ip);
echo "<br></b>";


echo "</pre>";

