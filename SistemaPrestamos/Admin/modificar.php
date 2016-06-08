  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" type="text/css"  href="css/stilo.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
   
	<?php  
	require('/2daconeccion/conexion.php');
include"menu.php";
?>






	<div style="text-align:left;">




<div class="aviso">
<div style="text-align:left;">
	<?php 
	$ID=$_GET['ID'];
	
	$query="SELECT * FROM productos WHERE ID='$ID'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>



						
						
			
		
	
			
		

<fieldset>
	<center><h1>Modificando a producto <?php echo $row['Nombre']; ?> </h1></center>

		<form name="modificar_usuario" method="POST" action="editado.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="ID" value="<?php echo $ID; ?>">
					<td><b>NoInventario: </b></td>
					<td><input style="border-radius:15px;" type="text" name="NoInventario" size="25" value="<?php echo $row['NoInventario']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Nombre: </b></td>
					<td><input style="border-radius:15px;" type="text" name="Nombre" size="25" value="<?php echo $row['Nombre']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Descripcion: </b></td>
					<td><input style="border-radius:15px;" type="text"  name="Descripcion" size="25" value="<?php echo $row['Descripcion']; ?>" /></td>
				</tr>

				<tr>
					<td><b>Modelo: </b></td>
					<td><input style="border-radius:15px;" type="text" name="Modelo" size="25" value="<?php echo $row['Modelo']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Ubicacion: </b></td>
					<td><input style="border-radius:15px;" type="text" name="Ubicacion" size="25" value="<?php echo $row['Ubicacion']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</fieldset>


<div style="text-align:right;">
<a href="producto.php"><img src="/integradora/imagenes/ICONOS/reloading2.png"/><font color="#000000">| Volver |</a>

<?php
include "../modulos/pie.php";
?>
