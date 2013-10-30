<?php
include 'xml.php';

$configuracion = new SimpleXMLElement($xmlstr);
//echo $configuracion->database[0]->database_host;

//Datos de configuraciÃ³n de la conexiÃ³n a la base de datos

//Servidor
$host=$configuracion->database[0]->database_host;

//Usuario
$user=$configuracion->database[0]->database_user;

//Password
$password=$configuracion->database[0]->database_password;

//Base de datos a utilizar
$db=$configuracion->database[0]->database_name;

$db=$configuracion->database[0]->email_from;

$db=$configuracion->database[0]->email_from_name;

$db=$configuracion->database[0]->email_smtp_host;

$db=$configuracion->database[0]->email_smtp_port;

$db=$configuracion->database[0]->email_smtp_user;

$db=$configuracion->database[0]->email_smtp_pass;

$db=$configuracion->database[0]->email_batch_limit;

?>