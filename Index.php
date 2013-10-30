<?php
require_once 'Db.php';
require_once 'Conf.php';
require_once 'xml.php';


mysql_connect("localhost", "root","");//tenemos que tenemos que hacer es realizar la consulta a la base de datos y extraer los datos de los estudiantes.
mysql_select_db("bd_estudiantes");


$nombre_estudiante= mysql_query('SELECT first_name FROM student');//row1
$description_tabla= mysql_query('SELECT description FROM test WHERE status=0');//row2
$tabla_course = mysql_query('SELECT name FROM course');//row3
$fecha = mysql_query('SELECT application_date FROM test');//row4
$minutos = mysql_query('SELECT term_in_minutes FROM test');//row5
$profesor = mysql_query('SELECT first_name FROM professor');//row6
$correo= mysql_query('SELECT email FROM student');//row7


while ($row2 = mysql_fetch_array($description_tabla)){
	while ($row1 = mysql_fetch_array($nombre_estudiante)) {
		while ($row3 = mysql_fetch_array($tabla_course)) {
			while ($row4 = mysql_fetch_array($fecha)) {
				while ($row5 = mysql_fetch_array($minutos)) {
					while ($row6 = mysql_fetch_array($profesor)) {
						while ($row7 = mysql_fetch_array($correo)) { 
							
							if (mail($row7['email'], 'Quiz Universidad', 
							'Hola '. $row1['first_name'].',
							El quiz '.$row2['description'].' del curso '.$row3['name'].' ha sido activado a partir de '.
							$row4['application_date']. ' y por un lapso de '. $row5['term_in_minutes'].' minutos.
							Seguir el siguiente link para ingresar al sistema automatizado de quices de la UTN.

							https://www.google.co.cr/ 

							'.

							$row6['first_name'])) {
								echo "Mensaje enviado";
							}else{
								echo "Mensaje no enviado";
							}
						}
					}
				}
			}
		}
	}
}


?>
