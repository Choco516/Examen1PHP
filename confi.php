<?php
include 'xml.php';
// Se requiere la clase xml

$configuracion = new SimpleXMLElement($xmlstr);
//Datos de configuración de la conexión a la base de datos

$host=$configuracion->database[0]->database_host;
//Servidor

$user=$configuracion->database[0]->database_user;
//Usuario

$password=$configuracion->database[0]->database_password;
//Password

$db=$configuracion->database[0]->database_name;
//Base de datos a utilizar

$db=$configuracion->database[0]->email_from;
//Email que enviará los correos 

$db=$configuracion->database[0]->email_from_name;
//Elvis Rocha que aparecerá en los correos 

$db=$configuracion->database[0]->email_smtp_host;
//Usuario local

$db=$configuracion->database[0]->email_smtp_port;
//Puerto por el que saldrá el correo

$db=$configuracion->database[0]->email_smtp_user;
//Correo que utilizará el usuario

$db=$configuracion->database[0]->email_smtp_pass;
//Contraseña del correo

$db=$configuracion->database[0]->email_batch_limit;
//Limite de correos a enviar

?>