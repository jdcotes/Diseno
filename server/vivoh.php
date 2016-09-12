<?php
  $server = "localhost";
  $username = "root";
  $password = "1234";
  $database = "disenouninorte";
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");

  $uno = $_GET['date1'];
  $dos = $_GET['date2'];

  $sql = "SELECT Latitud, Longitud FROM  `coordenadas` WHERE FechaGPS BETWEEN  '$uno' AND  '$dos';";
  $ejecutar_sql1=mysql_query($sql) or die("Problemas en consulta: ".mysql_error());
  
  $tabla=array();
  $i=0;
    while($reg=mysql_fetch_array($ejecutar_sql1)){  
      $tabla[$i]=$reg;
      $i++;
    }
  echo json_encode($tabla);
  mysql_free_result($ejecutar_sql1);
  mysql_close($con);

?>