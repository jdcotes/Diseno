<?php
  $server = "localhost";
  $username = "root";
  $password = "1234";
  $database = "disenouninorte";
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");
  
  
  $sql = "SELECT IDvehiculo FROM  `registro` ";
  $ejecutar_sql1=mysql_query($sql) or die("Problemas en consulta: ".mysql_error());

  $sql1 = "SELECT COUNT(IDvehiculo) FROM registro;";
  $ejecutar_sql2 =mysql_query($sql1) or die("Problemas en consulta: ".mysql_error());
  
  $tabla=array();
  $i=0;

    while($reg=mysql_fetch_array($ejecutar_sql1)){  
      $tabla[$i]=$reg;
      $i++;
    }

  echo json_encode($tabla);
  echo($ejecutar_sql2);
  mysql_free_result($ejecutar_sql1);
  mysql_close($con);

?>