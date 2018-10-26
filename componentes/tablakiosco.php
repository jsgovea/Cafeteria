
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
			<tr>
				<td>FOLIO</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="select distinct folio from kiosco where status=0 order by folio desc limit 5;";
					}else{
						$sql="select distinct folio from kiosco where status=0 order by folio desc limit 5;";
					}
				}else{
					$sql="select distinct folio from kiosco where status=0 order by folio desc limit 5;";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>