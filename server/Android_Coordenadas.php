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


while true {

$floatlat  = floatval($_POST['Latitud_gps']);
$floatlong = floatval($_POST['Longitud_gps']);

if (($floatlat-$lat)>=0.0003 || ($floatlong-$long)>=0.0003 || ($lat-$floatlat)>=0.0003 || ($long-$floatlong)>=0.0003  ) { 

$consulta=mysql_query("INSERT INTO coordenadas (FechaGPS,FechaServer,Latitud,Longitud) VALUES('$_POST[Fecha_Hora_gps]','$fecha_servidor','$_POST[Latitud_gps]','$_POST[Longitud_gps]')");
mysql_free_result($consulta);

$lat=$floatlat;
$long=$floatlong;