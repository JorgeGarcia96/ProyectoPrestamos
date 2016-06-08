<?php
include"menu.php";
?>
<?php
	
	require('/2daconeccion/conexion.php');
	
	 $id=$_GET['ID'];
	
	$query="SELECT * FROM Alumnos WHERE ID='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>



<fieldset>
		<center><h1>Prestando producto a <?php echo $row['Nombre']; ?></h1></center>
		
		<form name="prestamos.php" method="POST" action="prestamos.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="ID" value="<?php echo $id; ?>">
					<td><b>NoControl: </b></td>
					<td><input style="border-radius:15px;" type="text" name="NoControl" size="25" value=" <?php echo $row['NoControl']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Nombre: </b></td>
					<td><input style="border-radius:15px;" type="text" name="Nombre" size="25" value="<?php echo $row['Nombre']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Apellido:</b></td>
					<td><input style="border-radius:15px;" type="text" name="Apellido" size="25" value=" <?php echo $row['Apellido']; ?>" /></td>
				</tr>
				<td><b>NoInventario: </b></td>
					<td><input style="border-radius:15px;" type="text" name="NoInventario" size="25"  /></td>
				</tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
				<div style="text-align:right;">
<a href="RegistraU.php"><img src="/integradora/imagenes/ICONOS/reloading2.png"/><font color="#000000">| Volver |</a>
			</table>
		</form>
	</body>
</fieldset>



<?php

require("/2daconeccion/conexion.php");
$query="SELECT * FROM prestamos";
	
	$resultado=$mysqli->query($query);
?>






<?php

?>


<fieldset>

			<legend>Prestamos</legend>
			
				

				<h4><i>Lista de Prestamos Recientes en el sistema..</i></h4>

				

					<table border=1 width="100%">
			<thead>
				<tr>
					
<th style="text-align:center;">ID</th>
<th style="text-align:center;">NoControl</th>
<th style="text-align:center;">Nombre</th>
<th style="text-align:center;">NombreProducto</th>
<th style="text-align:center;">FechaPrestamo</th>
<th style="text-align:center;">FechaEntrega</th>
<th style="text-align:center;">Estado</th>
<th style="text-align:center;">Comentarios</th>
<th style="text-align:center;">ACCIONES</th>

					
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<?php echo $row['ID'];?>
							</td>
							<td>
								<?php echo $row['NoControl'];?>
							</td>
							<td>
								<?php echo $row['NombreProducto'];?>
							</td>
							<td>
								<?php echo $row['FechaPrestamo'];?>
							</td>
							<td>
								<?php echo $row['FechaEntrega'];?>
							</td>
							<td>
								<?php echo $row['Estado'];?>
							</td>
							<td>
								<?php echo $row['Comentarios'];?>
							</td>
							<td>
								
				<center><a href="comentarios.php?ID=<?php echo $row['ID'];?>">Comentarios</a></center>
							</td>
		
							
						</tr>
					<?php } ?>
				</tbody>
			</table>

								
			
		</fieldset>
