<?php

$server = "localhost";
  $username = "root";
  $password = "1234";
  $database = "disenouninorte";
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");

date_default_timezone_set('America/Bogota');
$fecha_servidor = date('Y-m-d H:i:s');


$lat=0;
$long=0;




$floatlat  = floatval($_POST['Latitud_gps']);
$floatlong = floatval($_POST['Longitud_gps']);



  $sql = "SELECT Latitud FROM coordenadas ORDER BY ID DESC LIMIT 1"  ;
  $ejecutar_sql1=mysql_query($sql) or die("Problemas en consulta: ".mysql_error());
  while($reg=mysql_fetch_array($ejecutar_sql1)){  
  $lat=$reg;
    }


  $sql2 = "SELECT Longitud FROM coordenadas ORDER BY ID DESC LIMIT 1"  ;
  $ejecutar_sql2=mysql_query($sql2) or die("Problemas en consulta: ".mysql_error());
  while($reg2=mysql_fetch_array($ejecutar_sql2)){  
  $long=$reg2;
  }



if (( abs($floatlat-$lat)>=0.0001) || abs($floatlong-$long)>=0.0001)) { 

$consulta=mysql_query("INSERT INTO coordenadas (FechaGPS,FechaServer,Latitud,Longitud) VALUES('$_POST[Fecha_Hora_gps]','$fecha_servidor','$_POST[Latitud_gps]','$_POST[Longitud_gps]')");
mysql_free_result($consulta);
}



mysql_close($con);

?>