
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?><h2><?php echo "Bienvenido: "; echo $_SESSION['nombre']; echo " "; echo $_SESSION['ap'];?></h2>
<div class="row">
	<div class="col-sm-12">
	<h2>Control de platillos</h2>
	<table class="table">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<thead class="thead-light">
					<th>ID</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Editar</th>
					<th>Eliminar</th>
			</thead>


			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT * from platillos where idPlatillo='$idp'";
					}else{
						$sql="SELECT * from platillos";
					}
				}else{
					$sql="SELECT * from platillos";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||";
					      
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				 
				

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