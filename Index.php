<?php
require_once 'Db.php';
// Se requiere la clase DB
require_once 'Conf.php';
// Se requiere la clase Conf
require_once 'xml.php';
// Se requiere la clase xml


mysql_connect("localhost", "root","");
// Realizamos la conexión con localhost
mysql_select_db("bd_estudiantes");
// Seleccionamos la base de datos con la que bamos a trabajar

date_default_timezone_set("America/Costa_Rica");
// Detecta la zona horaria en la que estamos 
$fecha_sistema=date ("Y-m-d h:i:s",time());
// Guarda la fecha del sistema 

$consulta1=mysql_query("SELECT groupInfo_id FROM test WHERE application_date<'$fecha_sistema' AND status=1");
// Esta consulta  da todos los registros de  groupInfo_id de la tabla test donde la fecha de la tabla sea menor que la fecha del sistema y cumpla con la condición que el campo status sea igaul a 1
while ($recorido = mysql_fetch_array($consulta1)) {
    // La variable recorrido almacena el array de la consulta anteriormente realizada 
	$almacenar1=$recorido['groupInfo_id']. "\n";
  	//La variable almacenar capta el recorrido de la columna groupInfo_id

  	$consulta2=mysql_query("SELECT student_id FROM registration WHERE groupInfo_id='$almacenar1'");
   	// Esta consulta  da todos los registros de  student_id de la tabla registration donde groupInfo_id sea igual al que tenemos almacenado en la variable almacenar1
   	while ($recorido= mysql_fetch_array($consulta2)) {
   		// La variable recorrido almacena el array de la consulta anteriormente realizada 
  		$almacenar2=$recorido['student_id']. "\n";
  		//La variable almacenar capta el recorrido de la columna student_id

		$consulta3=mysql_query("SELECT description FROM test WHERE groupInfo_id='$almacenar1'");
		// Esta consulta  da todos los registros de  description de la tabla test donde groupInfo_id sea igual al que tenemos almacenado en la variable almacenar1
		while ($recorido = mysql_fetch_array($consulta3)) {
			// La variable recorrido almacena el array de la consulta anteriormente realizada 
	  		$almacenar3=$recorido['description']. "\n";
	  		//La variable almacenar capta el recorrido de la columna description

			$consulta4=mysql_query("SELECT course_id FROM groupinfo WHERE id='$almacenar1'");
			// Esta consulta  da todos los registros de  course_id de la tabla groupinfo donde id sea igual al que tenemos almacenado en la variable almacenar1
			while ($recorido = mysql_fetch_array($consulta4)) {
				// La variable recorrido almacena el array de la consulta anteriormente realizada 
		  		$almacenar4=$recorido['course_id']. "\n";
		  		//La variable almacenar capta el recorrido de la columna course_id

				$consulta5=mysql_query("SELECT name FROM course WHERE id='$almacenar4'");
				// Esta consulta  da todos los registros de  name de la tabla course donde id sea igual al que tenemos almacenado en la variable almacenar4
				while ($recorido = mysql_fetch_array($consulta5)) {
					// La variable recorrido almacena el array de la consulta anteriormente realizada 
					$almacenar5=$recorido['name']. "\n";
					//La variable almacenar capta el recorrido de la columna name

				  	$consulta6=mysql_query("SELECT application_date FROM test WHERE groupInfo_id='$almacenar1'");
				  	// Esta consulta  da todos los registros de  application_date de la tabla test donde groupInfo_id sea igual al que tenemos almacenado en la variable almacenar1
				  	while ($recorido = mysql_fetch_array($consulta6)) {
				  		// La variable recorrido almacena el array de la consulta anteriormente realizada 
				  		$almacenar6=$recorido['application_date']. "\n";
				  		//La variable almacenar capta el recorrido de la columna application_date

						$consulta7=mysql_query("SELECT term_in_minutes FROM test WHERE groupInfo_id='$almacenar1'");
						// Esta consulta  da todos los registros de  term_in_minutes de la tabla test donde groupInfo_id sea igual al que tenemos almacenado en la variable almacenar1
						while ($recorido = mysql_fetch_array($consulta7)) {
							// La variable recorrido almacena el array de la consulta anteriormente realizada 
						  	$almacenar7=$recorido['term_in_minutes']. "\n";
						  	//La variable almacenar capta el recorrido de la columna term_in_minutes

							$consulta8=mysql_query("SELECT id FROM test WHERE groupInfo_id='$almacenar1'");
							// Esta consulta  da todos los registros de  id de la tabla test donde groupInfo_id sea igual al que tenemos almacenado en la variable almacenar1
							while ($recorido = mysql_fetch_array($consulta8)) {
								// La variable recorrido almacena el array de la consulta anteriormente realizada 
							  	$almacenar8=$recorido['id']. "\n";
							  	//La variable almacenar capta el recorrido de la columna id

								$consulta9=mysql_query("SELECT professor_id FROM groupinfo WHERE id='$almacenar4'");
								// Esta consulta  da todos los registros de  professor_id de la tabla groupinfo donde id sea igual al que tenemos almacenado en la variable almacenar4
								while ($recorido = mysql_fetch_array($consulta9)) {
									// La variable recorrido almacena el array de la consulta anteriormente realizada 
								  	$almacenar9=$recorido['professor_id']. "\n";
								  	//La variable almacenar capta el recorrido de la columna professor_id

									$consulta10=mysql_query("SELECT first_name FROM professor WHERE id='$almacenar9'");
									// Esta consulta  da todos los registros de  first_name de la tabla professor donde id sea igual al que tenemos almacenado en la variable almacenar9
									while ($recorido = mysql_fetch_array($consulta10)) {
										// La variable recorrido almacena el array de la consulta anteriormente realizada 
										$almacenar10=$recorido['first_name']. "\n";
										//La variable almacenar capta el recorrido de la columna first_name

											$datos = mysql_query("SELECT first_name, email FROM student WHERE id='$almacenar2'");
											// Esta consulta  da todos los registros de  first_name y email de la tabla student donde id sea igual al que tenemos almacenado en la variable almacenar2
											while ($recorido = mysql_fetch_array($datos)) {
											    // La variable recorrido almacena el array de la consulta anteriormente realizada 
											    if (mail($recorido['email'], 'Quiz Universidad', 
																	   'Hola '. $recorido['first_name']."\n".
																	   'El quiz '.$almacenar3.' del curso '.$almacenar5.' ha sido activado a partir de '.
																		$almacenar6. ' y por un lapso de '. $almacenar7.' minutos'.
																		"\n".
																		"\n".
																	   'Seguir el siguiente link para ingresar al sistema automatizado de quices de la UTN'.
																		"\n".
																		"\n".	
																	   'https://www.google.co.cr/'."\n".
																	   "\n". 
																		$almacenar10)) {
																			echo "Mensaje enviado ";
																		}else{
																			echo "Mensaje no enviado ";
																		}

											}
									}
								}
							}
						}
					}
				}
			}
		}
    }
}
?>
