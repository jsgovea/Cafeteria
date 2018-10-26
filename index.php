<?php
 session_start();
 if(!isset($_SESSION['nombre']))
 {
      echo "<script>
              alert('Sesión expirada');
              window.location= 'login.php'
            </script>";    
 }

 if(($_SESSION['tipo'])!=1){
	echo "<script>
			alert('Usuario sin permiso');
			window.history.back();
		  </script>";
 }
	require_once "php/conexion.php";
	$conexion=conexion();
  	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>

	<section class="portafolio fadeInDown">
	
		<div class="portafolio-container">
		<h1>Menu de inicio</h1>
		<div class="nav">
		<h2><?php echo "Bienvenido: &nbsp;&nbsp;&nbsp;&nbsp;"; echo $_SESSION['nombre']; echo " "; echo $_SESSION['ap'];?></h2>
		<form class="navbar-form navbar-right" action="php/cerrarSesion.php" method="post">
				<button type="submit" class="btn btn-primary">Cerrar sesión</button>
			</form>
		</div>
		</div>
		
		<div class="portafolio-container">
			<a class="portafolio-item" href="platillos.php">
				<img src="img/2.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Platillos</h2>
					<p>Aqui se realizan las altas y bajas de los platillos de la cafetería</p>
				</section>
			</a>
			<a class="portafolio-item" href="ingredientes.php">
				<img src="img/7.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Ingredientes extras</h2>
					<p>Aqui se dan de alta los acompañantes de los platillos de la cafetería.</p>
				</section>
			</a>
			<a class="portafolio-item" href="inventario.php">
				<img src="img/3.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Inventario</h2>
					<p>Aqui se realiza las altas y bajas de los productos de la cafetería</p>
				</section>
			</a>
			<a class="portafolio-item" href="tabla.php">
				<img src="img/8.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Usuarios</h2>
					<p>Aqui se dan de alta y de baja a los usuarios del sistema de la cafetería.</p>
				</section>
			</a>
		</div>


		<br>
		<br>
		<br>
		<br>

		<div class="portafolio-container">
			<a class="portafolio-item" href="clientes.php">
				<img src="img/5.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Clientes</h2>
					<p>Aqui se dan de alta los clientes que desean contar con algun credito</p>
				</section>
			</a>
			<a class="portafolio-item" href="pago_clientes.php?id=0">
				<img src="img/6.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Deudores</h2>
					<p>Aqui se cobra lo que les falta a los clientes que pidieron credito.</p>
				</section>
			</a>
			<a class="portafolio-item" href="caja_admin.php?id=0">
				<img src="img/1.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Caja registradora</h2>
					<p>Aqui se realizan las ventas en caja</p>
				</section>
			</a>
			<a class="portafolio-item" href="rpt_general.php">
				<img src="img/4.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Reportes</h2>
					<p>Aqui se imprimen reportes de las ventas durante un tiempo predeterminado</p>
				</section>
			</a>
		</div>
		<br>
		<br>
		<br>
		<br>
		<div class="portafolio-container">
			<a class="portafolio-item" href="kiosco_admin.php">
				<img src="img/12.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Cocinero</h2>
					<p>Aqui se manda el pedido del platillo del cliente al cocinero.</p>
				</section>
			</a>
			<a class="portafolio-item" href="kiosco_clientes.php">
				<img src="img/9.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Kiosco</h2>
					<p>Aqui se visualiza los turno de los pedidos de los clientes en el monitor.</p>
				</section>
			</a>
			<a class="portafolio-item" href="reimpresion.php">
				<img src="img/10.jpg" alt="" class="portafolio-img">
				<section class="portafolio-text">
					<h2>Reimpresión de tickets</h2>
					<p>Aqui se imprimen los tickets de las ventas pasadas.</p>
				</section>
			</a>
			<p class="portafolio-item" id="item-oculto">

			</p>
		</div>
		<br>
		<br>
	</section>
</body>
<style>

.nav{
	margin-top: 1em;
	margin-bottom: 4em;
	width: 47%;
	height: 1em;
	background-color: WhiteSmoke;
	padding: 2em;
	box-shadow: 0 0 3px black;

	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;

	-webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	  
	display: flex;  
	align-items: center;
	justify-content: space-around;
	
}

.nav h2{
	position: relative;
	color: black;
}

button{
	position: relative;
	border-radius: 0.5em;
	padding: 1em;
	background-color: black;
	color: white;
	border-style: none;
	cursor: pointer;
}

button:hover{
	background-color: rgb(51,122,183);
}

#item-oculto{
	-webkit-box-shadow: 0 0 0 0;
	box-shadow: 0 0 0 0;
}

h1{
	margin-top: 0.4em;
	margin-bottom: 1em;
	text-align: center;
	font-size: 38px;

	width: 47%;
	
	background-color: WhiteSmoke;
	padding: 1em;
	box-shadow: 0 0 3px black;

	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;

	-webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
}

*{
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</html>