<?php

//-------------CONECCION----------
	require("/2daconeccion/conexion.php");

//------------------LO QUE RESIBIMOS GUARDADO EN BARIABLES-----

	$NoInventario=$_POST['NoInventario'];
	$Nombre=$_POST['Nombre'];
	$Descripcion= $_POST['Descripcion'];
	$Modelo=$_POST['Modelo'];
	$Ubicacion=$_POST['Ubicacion'];
	$ID=$_POST['ID'];
	

	

//-----------------ACCIONES A REALIZAR------------------
	echo '<script>alert("Los datos se an actualizado correctamente. Verifiquelos por favor.")</script> ';
	$query=" UPDATE productos set NoInventario='$NoInventario',Nombre='$Nombre',Descripcion='$Descripcion',Modelo='$Modelo',Ubicacion='$Ubicacion' WHERE ID='$ID'";
	$resultado=$mysqli->query($query);
	echo "<script>location.href='producto.php'</script>";


?>