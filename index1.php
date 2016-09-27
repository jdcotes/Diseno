<!DOCTYPE HTML>
<html class="no-js">
	<head>
		<title>Ubica Tu Vehículo</title>

		 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsFelqvBHeiBZ9KEmCJ31cVXQjdo0aASk" async defer></script>
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
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
        height: 800px;
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
						<img src="images/banner.jpg">
<!-- 						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li>
						<li><a href="#" class="button special">Sign Up</a></li> -->
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Ubica Tu Vehículo</h2>
					<p>Ubica, rastrea, haz seguimiento a Tu Vehículo en tiempo real</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section>
							<br>
								<h3>¿Donde ha estado mi Vehículo?</h3>
								<p>Ingrese en las siguientes casillas los rangos de fecha y hora deseados para conocer el histórico de su vehículo</p>                                  
									<form>
										    <div> Fecha Inicial:
										           	<input id="fecha1"  runat="server" type="text" name="date1" class="tcal" value="" />
											</div>
											<br>
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
									</form>

                                       <!--<script type="text/javascript">
										$('#slider').slider({
										  orientation: 'horizontal',
										  range:       true,
										  value:      17
											});
									    </script> -->
	                             
							</section>
							<hr />
						</div>

						<div class="8u skel-cell-important">
							<section>					
								<div id='map'>
							</section>
						</div>
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