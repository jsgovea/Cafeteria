<?php
	require_once "php/conexion.php";
	$conexion=conexion();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
</head>
<body>

    <div class="cabecera">
        <img src="logo-cesun_189_negro.png" alt="logo">
        <h1>PEDIDOS</h1>
    </div>

    <div class="seccionVideo">
        <video autoplay loop>
            <source src="videos/Cesun Universidad   Video Institucional[1].webm" type="video/webm">
            <source src="videos/Cesun Universidad   Video Institucional[1].ogv" type="video/ogv">
            <source src="videos/Cesun Universidad   Video Institucional[1].mp4" type="video/mp4">
        </video>
    </div>
    <footer>
        <p>Por favor, espere su turno.</p>
    </footer>

    <div id="tabla"></div>
</body>
<script type="text/javascript">
	
    $(document).ready(function(){
		$('#tabla').load('componentes/tablakiosco.php');

        setTimeout(function(){
            $( "#tabla" ).load( "kiosco_clientes.php" );
        }, 10000);
	});

</script>

<style>

    .cabecera {
        padding: 1em;
        width: 95%;
        height: 15%;
        box-shadow: 0 1px 2px black;
        background-color: rgb(131, 152, 61);
        z-index: 0;
        position: fixed;
        top: 0;
    }

    .cabecera h1{
        position: fixed;
        top: 2%;
        left: 30%;
        font-size: 4em;
        font-weight: bold;
        color: white;
    }

    body{
        background-color: black;
        overflow-x: hidden;
        overflow-y: hidden;
    }

    footer{
        color: white;
        position: fixed;
        bottom: 0;
        width: 95%;
        z-index: 1;
    }

    footer p{
        font-size: 3em;
        position: relative;
        left: 22%;
    }

    video{
        width: 77%;
        position: fixed;
        top: 15%;
        z-index: -2;
    }
</style>
</html>