  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" type="text/css"  href="css/stilo.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
   
<?php
include"menu.php";
?>


<div class="principal1">
	<div class="formulario1">
		<fieldset>
			<legend>Registro de Inventario</legend>
			<form action="GuardaProducto.php" method="POST">
				
				<table>
					<tr>
						<td><label for="Nombre">NoInventario </label></td>
						<td><input id="nom" name="NoInventario" type="text" size="20" maxlength="40"  /></td>
					
					</tr>
					<tr>
						<td><label for="Nombre">Nombre </label></td>
						<td><input id="nom" name="Nombre" type="text" size="20" maxlength="40"  /></td>
					
					</tr>
					<tr>
						<td><label for="Descripcion">Descripcion</label></td>
						<td colspan="2"><input required="required"  name="Descripcion" type="text" size="20" maxlength="40" /></td>
					</tr>
					<tr>
						<td><label for="Modelo">Modelo</label></td>
						<td colspan="2"><input name="Modelo" size="20" maxlength="40" /></td>
					</tr>
					<tr>
						<td><label for="Ubicacion">Ubicacion</label></td>
						<td colspan="2"><input name="Ubicacion" size="20" maxlength="40" /></td>
					</tr>
					
														
				</table>
				<input type="submit" value="Guardar registro del Producto" />				

			</form>
		</fieldset>
	</div>
</div>

<?php
	include "../modulos/pie.php";



	
require("/2daconeccion/conexion.php");
$query="SELECT * FROM productos";
	
	$resultado=$mysqli->query($query);
?>

<?php
	
?>





<fieldset>

			<legend>Productos</legend>
			
				

				<h4><i>Lista del inventario disponible</i></h4>

				

					<table border=1 width="80%">
			<thead>
				<tr>
					
<th style="text-align:center;">ID</th>
<th style="text-align:center;">NoInventario</th>
<th style="text-align:center;">Nombre</th>
<th style="text-align:center;">Descripcion</th>
<th style="text-align:center;">Modelo</th>
<th style="text-align:center;">Ubicacion</th>
<th style="text-align:center;">ACCION</th>

					
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<?php echo $row['ID'];?>
							</td>
							<td>
								<?php echo $row['NoInventario'];?>
							</td>
							<td>
								<?php echo $row['Nombre'];?>
							</td>
							<td>
								<?php echo $row['Descripcion'];?>
							</td>
								<td>
								<?php echo $row['Modelo'];?>
							</td>
							</td>
								<td>
								<?php echo $row['Ubicacion'];?>
							</td>
							<td>
								
				<center><a href="modificar.php?ID=<?php echo $row['ID'];?>">editar</a>||<a href="Eliminado.php?ID=<?php echo $row['ID'];?>">Eliminar</a></center>
							</td>
							
								
							

							
							
							
						
							
						
							
							
						</tr>
					<?php } ?>
				</tbody>
			</table>

								
			
		</fieldset>