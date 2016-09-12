<html class="no-js">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diseño Uninorte 201630</title>
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
			<li><a href="indexx.php">Histórico</a></li>
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
	<h3>Calendario</h3>
	<br>
	<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<title>Simple Tigra Calendar</title>

	<!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
</head>
<body>
	<form action="#">
		<!-- add class="tcal" to your input field -->
		<div><input id="fecha1" runat="server" type="text" name="date" class="tcal" value="" /></div>
		<output onforminput="value=fecha1.value" for="fecha1"></output>
		<script src= ></script>
		<div><input id="fecha2"  type="text" name="date" class="tcal" value="" /></div>
	</form>
	<p></p>
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
				</div>
 -->
 
</section>

<footer>
	<p class="foot"> Diseño Electrónico - Universidad del Norte - 2016</p>
</footer>
	<script src="js/realtime1.js"></script>	
	</body>
</html>