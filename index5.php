
<html class="no-js">
	<head>
		<title>Ubica Tu Vehículo</title>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsFelqvBHeiBZ9KEmCJ31cVXQjdo0aASk" async defer></script>
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>


    	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<title>Simple Tigra Calendar</title>

	<!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
	
	<!-- HORAS SRC LINK ETC -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
	<style type="text/css">

	.custom-date-style {
		background-color: red !important;
	}

	.input{	
	}
	.input-wide{
	width: 600px;
	}

</style>

	</head>
	<body id="top">

		<!-- Header -->
			<header id="header"  class="skel-layers-fixed">
				<h1>Ubica Tu Vehículo</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="index1.php" >Histórico</a></li>
						<li><a href="index5.php" class="button special">Registro</a></li>
					</ul>
				</nav>
			</header>

			<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Ubica Tu Vehículo</h2>
					<p>Ubica, rastrea, haz seguimiento a Tu Vehículo en tiempo real</p>
				</div>
			</section>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="4u">
							<section id="formulario">
							<h3 align="justify"><center>Registra Tu Vehículo</center></h3>
								<p align="justify">LLene el siguiente formulario para registrar vehículo</p>	
								<table>
							        <tr>
									<td>Marca: <input type = "text" runat = "server" id = "marca" ></td>
									</tr>
									<tr>
									<td>Referencia: <input type = "text" id = "referencia" ></td>
									</tr>
									<tr>
									<td>Modelo:  <input type = "text" id = "modelo" ></td>
									</tr>
								</table><center>
								<input type="button" value = "Registrar Vehiculo" onclick = "Registrar();"></center>
						</section>
						<section id = "Mensaje" style = "display: none">
							<p>Registro realizado con éxito</p>
						</section>

							<hr/>
						</div>

						<div class="8u skel-cell-important">
	

							<?php

							mysql_connect('localhost','root','1234');
							mysql_select_db('registro');
							$sql="select * from registro";
							$records=mysql_query($sql);

							while($hola=mysql_fetch_assoc($records)){

								echo  $hola['IDvehiculo'];
								echo  $hola['Marca'];
								echo  $hola['Referencia'];
								echo  $hola['Modelo'];

							}

							?>

							

						</div>
					
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
				
					<ul class="copyright">
						<li>Diseño Electrónico. Universidad del Norte. 2016</li>
						<li>Desarrollado por: Juan Diego Cotes | Cristian Cepeda | Hernán Carrillo | Andrea Fontalvo</li>

					</ul>
				</div>
			</footer>


            <!-- MAPA -->
			<script src="js/realtime1.js"></script>	


	</body>

<script src="./jquery.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
		function Registrar(){
			var a = document.querySelector("#marca");
			var marca1 = marca.value;
			var b = document.querySelector("#referencia");
			var referencia1 = referencia.value;
			var c = document.querySelector("#modelo");
			var modelo1 = modelo.value;
			console.log(marca1);
			console.log(referencia1);
			console.log(modelo1);
			$.post("server/vivov.php",{mark: marca1,refrence: referencia1,model: modelo1}, function (respuesta){

		    	var y = document.querySelector("#formulario");
    			y.setAttribute("style","display:none");
    			var zz = document.querySelector("#Mensaje");
    			zz.setAttribute("style","display: inline");

			});
		}
	</script>

</html>