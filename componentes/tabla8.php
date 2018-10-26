
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
 $idcajero=$_SESSION['id'];
  $codigocliente=$_GET['codigocliente'];
 
 ?>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			 
		</caption>
			<tr>
				 
				<td>Folio</td>
				
				<td>Descripcion</td>
				<td>Cantidad</td>
				<td>Precio_Unitario</td>
				<td>Total</td>
				 
				<td>Eliminar</td>
			</tr>

			<?php 

					$sql="select * from ventas where id_cliente='".$codigocliente."' and Eliminada=0 and status=0" ;

				$result=mysqli_query($conexion,$sql);	
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						$ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						$ver[5]."||".
						$ver[6]."||".
						$ver[7]."||";
					      
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				
 
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>