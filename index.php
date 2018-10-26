<?php
session_start();
	require_once "php/conexion.php";
	$conexion=conexion();
  	 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>CSS3 Animated Navigation Menu | Tutorialzine Demo</title>

        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />

		<!-- Font Awesome Stylesheet -->
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />

		<!-- Including Open Sans Condensed from Google Fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />

        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

    	<nav id="colorNav">
			<ul>
				<li class="green">
					<a href="tabla.php" class="icon-user" title="Agregar Usuarios"></a>
					<!--<ul>
						<li><a href="http://tutorialzine.com/2012/10/css3-dropdown-menu/">Back to the tutorial</a></li>
						<li><a href="http://tutorialzine.com/2012/10/css3-dropdown-menu/#comments">Get help</a></li>
						<li><a href="http://tutorialzine.com/2012/10/css3-dropdown-menu/">Download this example</a></li>
					</ul>-->
				</li>
				<li class="blue">
					<a href="#" class="icon-plus" title="Inventario"></a>
					<ul>
						<li><a href="inventario.php" >Inventario</a></li>
					
							<li><a href="platillos.php">Platillos</a></li>
						<li><a href="ingredientes.php">Ingredientes</a></li>
						<li><a href="clientes.php">Clientes</a></li>
					</ul>
				</li>
			  <li class="blue">
					<a href="caja.php?id=0" class="icon-shopping-cart" title=""></a>
					<ul>
							<li><a href="pago_clientes.php?id=0">Clientes</a></li>
					</ul>
				</li>
				<li class="yellow">
					<a href="#" class="icon-list" title="Reportes"></a>
					<ul>
						<li><a href="reportes/rpt_general.php">Reporte General</a></li>
						<li><a href="http://tutorialzine.com/tag/jquery/">jQuery techniques</a></li>
						<li><a href="http://tutorialzine.com/tag/css/">CSS articles</a></li>
						<li><a href="http://tutorialzine.com/category/tutorials/">Everything else</a></li>
					</ul>
				</li>
				<li class="purple">
					<a href="#" class="icon-envelope"></a>
					<ul>
						<li><a href="http://tutorialzine.com/contact/">Contact us</a></li>
					</ul>
				</li>
			</ul>
		</nav>

        <!-- BSA AdPacks code. Please ignore and remove.--> 
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://cdn.tutorialzine.com/misc/adPacks/v1.js" async></script>
    
    </body>
</html>
