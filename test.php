<?php
/*Incluimos el fichero de la clase Db*/
require_once 'Db.php';
/*Incluimos el fichero de la clase Conf*/
require_once 'Conf.php';

/*Creamos la instancia del objeto. Ya estamos conectados*/
$bd=Db::getInstance();

/*Creamos una query sencilla*/
$sql='SELECT * FROM students';

/*Ejecutamos la query*/
$stmt=$bd->ejecutar($sql);

/*Realizamos un bucle para ir obteniendo los resultados*/
while ($x=$bd->obtener_fila($stmt,1)){
   echo $x['first_name'] . "\n";
}

?>