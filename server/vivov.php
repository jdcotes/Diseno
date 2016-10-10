<?php
  $server = "localhost";
  $username = "root";
  $password = "1234";
  $database = "disenouninorte";
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");
  
  // variables que voy a necesitar
  $sapce = " ";
  $cero = $_POST['auto'];

  
  $sql = "INSERT INTO registro (IDvehiculo, Marca, Referencia, Modelo) VALUES ('4','Mazda','6','2016')";
  $ejecutar_sql1=mysql_query($sql) or die("Problemas en consulta: ".mysql_error());


  mysql_close($con);

?>