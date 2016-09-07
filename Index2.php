<html class="no-js">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diseño Uninorte 201630</title>
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsFelqvBHeiBZ9KEmCJ31cVXQjdo0aASk" async defer></script>
	 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
     <link rel="stylesheet" href="css/estilo.css">
   
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
	div class="logo">
		<img src="logo.png">
	</div>
	<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="index2.php">Histórico</a></li>
			<li><a href="#">Acerca de Nosotros</a></li>
	</nav>
</header>		
<section class="main">
<section class="articles">
<article>
	<h2>¿Donde ha estado mi vehículo?</h2>
	<br>
	<p> </p>
	</article>

    <article>
    <div id='map'> </div>
	</article>
 </section>

<aside>
	<h3>Calendario</h3>
	<br>
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
		
	</body>
</html>