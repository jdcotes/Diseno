<?php
				include("Conexion.php");
				$cero = $_POST['id'];
				$con = new Conexion();
				$con->recuperarDatos();
?>