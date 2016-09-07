<?php
class conexion{
	function recuperarDatos(){

  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "disenouninorte";
  
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");

  $query = "SELECT Hora FROM `coordenadas` ORDER by Hora limit 1";
  $resultado = mysql_query($query);


$cosa=mysql_free_result($resultado);
echo($cosa);
}
}
?>




