
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
 $idcajero=$_SESSION['id'];

 ?>
<div class="row">
	<div class="col-sm-12">
	<table class="table">
		<caption>
			 
		</caption>
		<thead class="thead-light">
			<tr>
				<th>Codigo</th>
				
				<th>Descripción</th>
				<th>Cantidad</th>
				<th>Precio Unitario</th>
				<th>Total</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>


			<?php 

					$sql="select * from caja where id_cajero='".$idcajero."'";

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
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
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