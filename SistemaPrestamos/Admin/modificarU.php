		
<?php
include"menu.php";

?>


<div style="text-align:left;">




<div class="aviso">
<div style="text-align:left;">
	<?php
	
	require("/2daconeccion/conexion.php");

	 $id=$_GET['ID'];
	
	$query="SELECT * FROM Alumnos WHERE ID='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>



<fieldset>
		<center><h1>Editando al  USUARIO <?php echo $row['Nombre']; ?></h1></center>
		
		<form name="editaU.php" method="POST" action="editaU.php">
			
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
				<tr>
					<td><b>Grupo: </b></td>
					<td><input style="border-radius:15px;" type="text" name="Grupo" size="25" value=" <?php echo $row['Grupo']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Correo: </b></td>
					<td><input style="border-radius:15px;" type="text" name="Correo" size="25" value=" <?php echo  $row['Correo']; ?>" /></td>
				</tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</fieldset>


<div style="text-align:right;">
<a href="RegistraU.php"><font color="#000000">| Volver |</a>

<?php
include "../modulos/pie.php";
?>
