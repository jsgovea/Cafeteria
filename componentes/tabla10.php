
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
 $idcajero=$_SESSION['id'];

 ?>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			 
		</caption>
			<tr class="danger">
				<td>Folio</td>
				<td>Descripcion</td>
				<td>Cantidad</td>
				<td>Nota</td>
				<td>Terminado</td>
			</tr>

			<?php 

					$sql="select * from kiosco where status=0 order by folio asc";

				$result=mysqli_query($conexion,$sql);	
				while($ver=mysqli_fetch_row($result)){ 

					$datos2=$ver[0]."||".
						$ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						$ver[5]."||".
						$ver[6]."||".
						$ver[7]."||";
					      
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				 
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