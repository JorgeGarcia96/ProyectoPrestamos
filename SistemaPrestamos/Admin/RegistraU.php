  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" type="text/css"  href="css/stilo.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
   
<?php
include"menu.php";
?>
<div class="principal">
	<div class="formulario">
		<fieldset>
			<legend>Registro de Usuarios</legend>
			<form action="GuardaUsuario.php" method="POST">
				
				<table id="colorTabla">
					<tr>
						<td><label for="NoControl">NoControl </label></td>
						<td><input id="nom" name="NoControl" type="text" size="20" placeholder="Numero de control"maxlength="40"  /></td>
					
					</tr>
					<tr>
						<td><label for="Nombre">Nombre </label></td>
						<td><input id="nom" name="Nombre" type="text" size="20" placeholder="Nombre(s)"maxlength="40"  /></td>
					
					</tr>
					<tr>
						<td><label for="Apellido">Apellido</label></td>
						<td colspan="2"><input required="required"  name="Apellido" placeholder="Apellidos" type="text" size="20" maxlength="40" /></td>
					</tr>
					<tr>
						<td><label for="Grupo">Grupo</label></td>
						<td colspan="2"><input name="Grupo" size="20"  placeholder="Grado y Grupo"maxlength="40" /></td>
					</tr>
					<tr>
						<td><label for="Correo">Correo</label></td>
						<td colspan="2"><input name="Correo" size="20" placeholder="Correo Institucional" maxlength="40" /></td>
					</tr>
					
														
				</table>
				<input type="submit" value="Guardar registro" />				

			</form>
		</fieldset>
	</div>
</div>

<?php
	include "../modulos/pie.php";



	
require("/2daconeccion/conexion.php");
$query="SELECT * FROM Alumnos";
	
	$resultado=$mysqli->query($query);
?>

<?php
	
?>





<fieldset id="colorsito">

			
				

				<h4><i>Alumnos Registrados</i></h4>

				

					<table border=1 width="80%" id="TablaAlumnos">
			<thead>
				<tr>
					
	<th style="text-align:center;">ID</th>
	<th style="text-align:center;">NoControl</th>
	<th style="text-align:center;">Nombre</th>
	<th style="text-align:center;">Apellido</th>
	<th style="text-align:center;">Grupo</th>
	<th style="text-align:center;">Correo</th>
	<th style="text-align:center;">ACCION</th>

					
				</tr>
				<body>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<?php echo $row['ID'];?>
							</td>
							<td>
								<?php echo $row['NoControl'];?>
							</td>
							<td>
								<?php echo $row['Nombre'];?>
							</td>
							<td>
								<?php echo $row['Apellido'];?>
							</td>
								<td>
								<?php echo $row['Grupo'];?>
							</td>
							</td>
								<td>
								<?php echo $row['Correo'];?>
							</td>
							<td>
								<center id="colorCenterA"><a href="modificarU.php?ID=<?php echo $row['ID'];?>">Editar</a><a href="prestamo.php?ID=<?php echo $row['ID'];?>">Prestar</a></center>
								
							</td>
							
								
							

							
							
							
						
							
						
							
							
						</tr>
					<?php } ?>
				</body>
			</table>

								
			
	</fieldset>