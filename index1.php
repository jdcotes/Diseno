<html class="no-js">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diseño Uninorte 201630</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsFelqvBHeiBZ9KEmCJ31cVXQjdo0aASk" async defer></script>
	 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
     <link rel="stylesheet">
   
	 <style type="text/css">
	 *{
	 	margin:0;
	 	padding:0;
	 }
	 body{
	 	background:#e6e6e6;
	 }

	 h2, h3{
	 	color:#B40404;
	 }

	 h4{
	 	color:#B40404;
	 }
	 
	 header, .main, footer{
	 	width: 90%;
	 	margin:auto;
	 	max-width: 1012px;
	 	margin: 20px auto;
	 }

	 header nav{
	 	background: #0B0B61;
	 	overflow:hidden;
	 }

	 header nav ul{
	 	list-style:none;
	 }

	 header nav ul li{
	 	float:left;
	 }

	 header nav ul li a{
	 	padding:10px 20px;
	 	display:block;
	 	color:#fff;
	 	text-decoration:none;
	 }

	 header nav ul li a:hover{
	 	background:#0431B4;
	 }

	 .main .articles{
	 	width: 68.5%;
	 	margin-right:1.5%;
	 	float:left;
	 }

	 .main .articles article{
	 	padding: 20px;
	 	background: #fff;
	 	margin-bottom: 20px;
	 }
	 .boton{
	 	color:#424242;
	 	background:#8A0829;
	 }


	 aside{
	 	width:30%;
	 	background: #D8D8D8;
	 	float: left;
	 	padding: 20px;
	 	box-sizing: border-box;
	 }

	 footer {
	 	background: #610B0B;
	 	color:#D8D8D8;
	 	clear:both;
	 	padding:10px 0px;
	 	text-align:center;
	 }
	  .main .map{
	  	width: 90%;
	  }

	  header{
	  	background:#e6e6e6;
	  	width: 1012px;
	  }

	  p .aside{
	  	text-align: justify;
	  }

.flat-slider.ui-corner-all,
.flat-slider .ui-corner-all {
  border-radius: 0;
}

.flat-slider.ui-slider {
  border: 0;
  background: #a5a5a5;
  border-radius: 48px;
}

.flat-slider.ui-slider-horizontal {
  height: 8px;
}

.flat-slider.ui-slider-vertical {
  height: 15em;
  width: 8px;
}

.flat-slider .ui-slider-handle {
  width: 14px;
  height: 22px;
  background: #cb2f2f;
  border-radius: 50%;
  border: none;
  cursor: pointer;
}

.flat-slider.ui-slider-horizontal .ui-slider-handle {
  top: 50%;
  margin-top: -11px;
}

.flat-slider.ui-slider-vertical .ui-slider-handle {
  left: 50%;
  margin-left: -7px;
}

.flat-slider .ui-slider-handle:hover {
  opacity: .8;
}

.flat-slider .ui-slider-range {
  border: 0;
  border-radius: 48;
  background: #f99;
}

.flat-slider.ui-slider-horizontal .ui-slider-range {
  top: 0;
  height: 8px;
}

.flat-slider.ui-slider-vertical .ui-slider-range {
  left: 0;
  width: 8px;
}
	</style>
		
	<style>
		html,body {
			height: 100%;
        	margin: 0 auto;
        	padding: 0;
        } 
      	#map{
        width: 100%;
        height: 500px;
      	}
    </style>
	</head>

	<body>
		<font face="helvetica">
<header>
	<div class="logo">
		<img src="logo.png">
	</div>
	<nav>
		<ul>
			 <li><a href="index.php">Inicio</a></li>
			<li><a href="index1.php">Histórico</a></li>
			<!--<li><a href="index2.php">Histórico 2</a></li>-->
			<li><a href="index3.php">Acerca de Nosotros</a></li>
		</ul>
	</nav>
</header>		
<section class="main">
<section class="articles">
<article>
	<h2>¿Donde ha estado mi vehículo?</h2>

	</article>

    <article>
    <div id='map'> </div>
	</article>
 </section>

<aside>

<article>
	
		<h3>Consulta Histórico</h3>

</article>
	<br>
	<head>
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
<body>
	<form>
	     <!-- action="#" -->
		<!-- add class="tcal" to your input field -->
		<div > <h4>Fecha Inicial:</h4>
				<br><center><input id="fecha1"  runat="server" type="text" name="date1" class="tcal" value="" /></center>
		</div>
				<br>
		<div > <h4>Fecha Final:</h4>
				<br><center><input id="fecha2" runat= "server" type="text" name="date2" class="tcal" value="" /></center>
		</div>
				<br>
		
		<div > <h4>Hora Inicial: </h4>
			<br><center><input type="text" runat ="server" value="" id="Desde" /></center>
		</div>
			<br>
		<div > <h4>Hora Final:</h4> 
			<br><center><input type="text" runat = "server" value="" id="Hasta" /></center>
		</div>

	    <br><center>
	    <input id="Boton" type = "button" value = "Consultar historial" onclick = "initMap()"/> </center>
	    <br>
	</form>

<!-- slider-->
		<div class="slider"
		        data-on-change="dropValueToInput"
		        data-role="slider"
		        data-max-value="1000"
		        data-min-value="0"></div>
		<div class="input-control text">
		    <input id="slider_input" value="0">
		</div>
		<script>
		    function dropValueToInput(value, slider){
		        $("#slider_input").val(value);
		    }
		</script>
<!-- fin slider-->

</aside>
             	<!-- <div id='map'> </div>					
				<p>Diseño Electrónico</p>
				<p><strong>Presentado por:</strong>
				<br>Hernan Carrillo 
				<br>Cristian Cepeda 
				<br>Juan Diego Cotes
				<br>Andrea Fontalvo 
				<br>
				<br><strong>Universidad del Norte
				<br>2016 </strong></p>
				<br></br>
				</div>-->
</section>

<footer>
	<p class="foot"> Diseño Electrónico - Universidad del Norte - 2016</p>
</footer>
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