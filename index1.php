<!DOCTYPE HTML>
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

    <style>
        #map{
        height: 500px;
        }
    </style>

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
	width: 500px;
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
						<li><a href="index1.php" class="button special">Histórico</a></li>
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
							<section>
								<h3 align="justify"><center>¿Donde ha estado mi Vehículo?</center></h3>
								<p align="justify"> Ingrese en las siguientes casillas los rangos de fecha y hora deseados para conocer el histórico de su vehículo</p>
							<form>							
								<table>
									  <tr>
									    <td><center>Fecha Inicial</td>
									    <td><center>Fecha Final</td> 
									  </tr>
									  <tr>
									    <td><input id="fecha1"  runat="server" type="text" name="date1" class="tcal" value="" /></td>
									    <td><input id="fecha2" runat= "server" type="text" name="date2" class="tcal" value="" /></td> 
									  </tr>
									  <tr>
									    <td><center>Hora Inicial</td>
									    <td><center>Hora Final</td> 
									  </tr>
									  <tr>
									    <td><input type="text" runat ="server" value="00:00" id="Desde" /></td>
									    <td><input type="text" runat = "server" value="23:00" id="Hasta" /></td> 
									  </tr>
							  	</table>
							</form>
							  	 	<center>
										    <input id="Boton" type = "button" value = "Consultar historial" onclick = "initMap();"/> </center>
								    <br>
                                   <!-- 									<form>
										    <div> Fecha Inicial: 
										           	<input id="fecha1"  runat="server" type="text" name="date1" class="tcal" value="" />
											</div>
											
											<div> Fecha Final:
												   	<input id="fecha2" runat= "server" type="text" name="date2" class="tcal" value="" />
											</div>
											<br>														
											<div> Hora Inicial: 
										    		<input type="text" runat ="server" value="00:00" id="Desde" />
											</div>
											<br>
											<div>Hora Final:
													<input type="text" runat = "server" value="23:00" id="Hasta" />
											</div>
										    <br><center>
										    <input id="Boton" type = "button" value = "Consultar historial" onclick = "initMap();"/> </center>
										   <br>
										    <div >
										    	<center>
													<input type= button value = "-" id="backward" style="visibility: hidden" onclick="Backward();"/>
													<input id="slider"  min = "" max = "" runat = "server" type = "range" style="visibility: hidden" onchange = "DrawMarker();" />
													<input type= button value = "+"  id="fordward" style="visibility: hidden" onclick="Forward();"/>
												</center>
											</div>
											<br>
											<center>
												<p> Su vehiculo estuvo aqui el: <b id = "beendate"></b> a las: <b id = "beentime"></b></p>
											</center>
									</form> -->
               
							</section>
							<hr/>
						</div>
						<div class="8u skel-cell-important">
							<div >
						    	<center>
									<input type= button value = "-" id="backward" style="visibility: hidden" onclick="Backward();"/>
									<input id="slider" value="0" min = "" max = "" type = "range" style="visibility: hidden" onchange = "DrawMarker();" />
									<input type= button value = "+"  id="fordward" style="visibility: hidden" onclick="Forward();"/>
								</center>
								<br>
							</div>
						    <div>
								<center>
									<p id="infor" style="visibility: hidden"> Su vehiculo estuvo aqui el: <b id = "beendate"></b> a las: <b id = "beentime"></b></p>
								</center>
							</div>
						    <div id='map'></div>

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
<script>

	$.datetimepicker.setLocale('es');
	$("#Desde").datetimepicker({
	datepicker:false,
	format:'H:i'

	});
	$("#Hasta").datetimepicker({
	datepicker:false,
	format:'H:i'
	});

</script>

</html>