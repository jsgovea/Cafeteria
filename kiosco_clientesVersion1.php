<?php
    $self = $_SERVER['PHP_SELF'];
    header("refresh:30; url=$self"); 
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
        <h2>Gracias por su compra</h2>
    </div>
    <?php
        $primerFolio="select distinct folio from kiosco where status=0 order by folio asc limit 1;";
        $resultFolio=mysqli_query($conexion,$primerFolio);

        $sql="select distinct folio from kiosco where status=0 order by folio asc limit 1,4;";
        $result=mysqli_query($conexion,$sql);


?>
    <table class="tabla" id="tabla">
        <thead>
            <tr>
                <th scope="col">FOLIO</th>
            </tr>
        </thead>
        <tbody>
        <?php  while($ver=mysqli_fetch_row($resultFolio)){ 
          echo "<tr><th  class='primerFolio' scope='row'> $ver[0] </th></tr>";
        }
        ?>
      <?php  while($ver2=mysqli_fetch_row($result)){ 
          echo "<tr><th scope='row'> $ver2[0] </th></tr>";
        ?>
        </tbody>
        <?php 
      }
        ?>
    </table>
    
</body>

<style>

    .cabecera {
        padding: 1em;
        height: 7.6em;
        box-shadow: 0 1px 2px black;
        background-color: rgb(131, 152, 61);
    }

    body{
        background-color: black;        
    }

    h1{
        position: relative;
        bottom: 95%;
        right: 10%;
        text-align: center;
        color: white;
        font-size: 4em;
        font-weight: bold;
    }

    h2{
        color: white;
        position: absolute;
        bottom: 0.5em;
        left: 12em;
        
    }

    video{
        width: 77%;
    }

    .tabla{
        position: fixed;
        width: 23%;
        top: 0;
        bottom: 0;
        right: 0;
    }

    thead th{
        background: black;
        color: white;
        height: 1.9em;
        box-shadow: 0 1px 2px black;
    }

    th{
        background: white;
        text-align: center;
        font-size: 4em;
        border-bottom: 1px solid #ddd;
        margin-bottom: 0.5em;
    }

    tbody th{
        padding-top: 5.5%;
        padding-bottom: 5.5%;
        background: white;
        text-align: center;
        font-size: 5em;
    }

    .primerFolio{
        width: 100px;
        height: 100px;
        background-color: yellow;
        -webkit-animation-name: example;
        -webkit-animation-duration: 4s;
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
    }

    @-webkit-keyframes example {
        from {background-color: yellow;}
        to {background-color: orange;}
    }

    @keyframes example {
        from {background-color: yellow;}
        to {background-color: orange;}
    }
</style>
</html>