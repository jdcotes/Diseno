<?php
  $server = "localhost";
  $username = "root";
  $password = "1234";
  $database = "disenouninorte";
  $con = @mysql_connect($server,$username,$password) or die("No se encontró el servidor");
  mysql_select_db($database,$con)or die("No se encontró la base de datos");

  $sapce = " ";
  $cero = $_POST['auto'];
  $uno = $_POST['fechita'];
  $dos = $_POST['fechita2'];
  $tres = $_POST['horita'];
  $cuatro = $_POST['horita2'];

  $desde = $uno.$sapce.$tres;
  $hasta = $dos.$sapce.$cuatro;

  $sql = "SELECT Latitud, Longitud, FechaGPS, Velocidad FROM  `coordenadas` WHERE IDvehiculo = '$cero' AND FechaGPS BETWEEN  '$desde' AND  '$hasta';";
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
