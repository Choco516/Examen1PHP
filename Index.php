<?php
$correo='balvarado91@gmail.com';
$nombre_estudiante='Brayan';
$description_tabla='Progra 1';
$tabla_course='ISW';
$fecha='27/10/13';
$minutos='30';
$profesor='Efren';


if (mail($correo, 'Hola, esto es una prueba',

'Hola '. $nombre_estudiante.',
El quiz '.$description_tabla.' del curso '.$tabla_course.' ha sido activado a partir de '.
$fecha. ' y por un lapso de '. $minutos.' minutos.
Seguir el siguiente link para ingresar al sistema automatizado de quices de la UTN.

https://www.google.co.cr/ 

'.

$profesor)) {
    echo 'Su mensaje fue enviado';

}else{
    echo 'Su mensaje no fue enviado';    
} 
?>
