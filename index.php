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
	</head>

	<body id="top" onload = "radiocreate();">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1>Ubica Tu Vehículo</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php" class="button special">Inicio</a></li>
						<li><a href="index1.php">Histórico</a></li>
						<li><a href="index5.php">Registro</a></li>
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
							<br>
								<h3>Información de Tu Vehículo</h3>
								<p>Los siguientes datos corresponden a la ultima ubicación registrada de tu vehículo</p>
                                   
                                    <script type="text/javascript">
                                        var auto_refresh = setInterval(
                                        function ()
                                        {
                                        $('#FECHA').load('LLAMAR.php').fadeIn("slow");
                                        }, 5000); // refresh every 5 seconds
                                    </script>
                                    
                                        <div id="FECHA"> </div>
                                        <div id='Hora'> </div>
                                        <div id="vehiculos"></div>
                                <br>
								<ul class="actions">
									<li><a href="index1.php" class="button alt">Revisar Histórico</a></li>
								</ul>
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
            <script src="js/realtime.js"></script>
            <script type="text/javascript">

            	var tamano;
            	var vehi = [];
            	var i = 1;

				$.post("server/vivoi.php",function(respuesta) {
					
					var prueba = JSON.parse(respuesta);
                    tamano = prueba.length

                    for (var j in prueba) {

		      		vehi[j] = parseFloat(prueba[j].IDvehiculo);
			      
			      	j=j+1;
			    	}

				});
				
				function radiocreate(){  
				//for (i = 1; i == tamano; i++){
		        var node = document.createElement('div');        
		        node.innerHTML = '<input type="checkbox" id="check'+i+'" name="check'+i+'"><label for="check'+i+'"> Vehiculo'+vehi[i]+'</label>';       
		        document.getElementById('vehiculos').appendChild(node);
	        	//}
				}
				
		    </script>

	</body>
</html>