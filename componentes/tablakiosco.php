<?php
	require_once "../php/conexion.php";
	$conexion=conexion();
?>
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

<style>
    .tabla{
        position: fixed;
        width: 23%;
        height: 100%;
        top: 0;
        right: 0;
    }

    thead th{
        background: black;
        height: 2.1em;
        color: white;
        box-shadow: 0 1px 2px black;
    }

    th{
        background: white;
        text-align: center;
        font-size: 4em;
        border-bottom: 1px solid #ddd;
    }

    tbody th{
        background: white;
        font-size: 5em;
    }

    .primerFolio{
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