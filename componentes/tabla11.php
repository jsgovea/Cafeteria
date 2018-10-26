
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
$id_cajero=$_SESSION['id'];
 ?><h2><?php echo "Bienvenido: "; echo $_SESSION['nombre']; echo " "; echo $_SESSION['ap'];?></h2>
<div class="row">
	<div class="col-sm-12">
	<h2>Reimpresion de Tickets</h2>
		<table class="table">
		<caption>
			 
		</caption>
			<thead class="thead-light">
					<th>Folio</th>
					<th>Codigo de articulo</th>
					<th>Descripcion</th>
					<th>Cantidad</th>
					<th>Precio unitario</th>
					<th>Total</th>
					<th>Imprimir</th>
			</thead>
			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT *	from ventas where id_venta='$idp'";
					}else{
						$sql="SELECT * from ventas order by id_venta desc ";
					}
				}else{
					$sql="SELECT * from ventas  order by  id_venta desc ";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||";
					      
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td>
					<button class="btn btn-primary glyphicon glyphicon-print	" onclick="document.location.href='tickets/ticket3.php?id=<?php  echo $ver[0];  ?>'"
						
					</button>
				</td>
				
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>