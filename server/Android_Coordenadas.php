<?php

$server = "localhost";
  $username = "root";
  $password = "1234";
  $database = "disenouninorte";
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");

date_default_timezone_set('America/Bogota');
$fecha_servidor = date('Y-m-d H:i:s');

$consulta=mysql_query("INSERT INTO $_POST[coordenadas] (Fecha,Hora,Latitud,Longitud) VALUES('$_POST[Longitud'$_POST[Fecha_Hora_gps]','$fecha_servidor','$_POST[Latitud_gps]','$_POST[Longitud_gps]',)");

mysql_free_result($consulta);
mysql_close($con);

?>