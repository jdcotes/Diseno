<?php
  $server = "localhost";
  $username = "root";
  $password = "1234";
  $database = "disenouninorte";
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");
  
  $um = $_POST['mark'];
  $dois =$_POST['refrence'];
  $treis =$_POST['model'];
  
  $sql = "INSERT INTO registro (Marca, Referencia, Modelo) VALUES ('$um','$dois','$treis')";
  $ejecutar_sql1=mysql_query($sql) or die("Problemas en consulta: ".mysql_error());

  echo("Registro exitoso");
  mysql_close($con);

?>