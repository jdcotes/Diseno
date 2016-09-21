<html class="no-js">
<head>

        <!-- Title -->
        <title>Ubica Tu Vehículo</title>
        <!-- Meta -->
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsFelqvBHeiBZ9KEmCJ31cVXQjdo0aASk" async defer></script>
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>


         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
         <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
            libs/jquery/1.3.0/jquery.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">

    <style>

        #map{
        height: 500px;
        }
    </style>
        
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                          </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home ">Inicio</a>
                                    </li>                      
                                    <li>
                                        <span class="fa-font ">Histórico</span>
                                        <ul>
                                            <li>
                                                <a href="index1.php">Fecha y hora</a>
                                            </li>
                                           <!--  <li>
                                                <a href="#">Lugar en específico</a>
                                            </li> -->
                                        </ul>
                                    </li>
                                  <!--   <li>
                                        <a href="index3.php" class="fa-comment ">Quiénes somos</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Side Column -->
                        <div class="col-md-3">
                            <!-- Recent Posts -->
                       <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Información</h3>
                                </div>
                                <div class="panel-body">
                               Los siguientes datos corresponden a la ultima ubicación registrada de tu vehiculo.

                                    <script type="text/javascript">
                                        var auto_refresh = setInterval(
                                        function ()
                                        {
                                        $('#FECHA').load('LLAMAR.php').fadeIn("slow");
                                        }, 5000); // refresh every 5 seconds
                                    </script>

                                </div>
                            </div>
                            <!-- End recent Posts -->
                            <!-- About -->

                            <!-- End About -->
                        </div>
                        <!-- End Side Column -->
                        <!-- Main Column -->
                        <div class="col-md-9">
                            <!-- Main Content -->
                            <!--<h2>Mapa Tiempo Real</h2> -->
                            <article class="mapaa">
                                <div id='map'> </div>
                            </article>           
                            <!-- End Main Content -->
                        </div>
                        <!-- MAPA -->                    
                        <!-- End Main Column -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
  
                        <!-- Disclaimer -->
                        <div class="col-md-4">
                            <h3 class="class margin-bottom-10">Acerca de Nosotros</h3>
                            <p>
                            Desarrollado por:
                                <br>. Juan Diego Cotes
                                <br>. Cristian Cepeda
                                <br>. Hernán Carrillo
                                <br>. Andrea Fontalvo
                                <br>
                                <br>Diseno Electrónico <br>Universidad del Norte
                                <br>
                                2016
                            </p>

                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->

                        <!-- End Contact Details -->
                        <!-- Sample Menu -->

                        <!-- End Sample Menu -->
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                </div>
            </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->

            <!-- MAPA -->
            <script src="js/realtime.js"></script>

    </body>
</html>
<!-- === END FOOTER === -->