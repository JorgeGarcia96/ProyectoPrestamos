<?php

//-------------CONECCION----------
	require('/2daconeccion/conexion.php');
//------------------LO QUE RESIBIMOS GUARDADO EN BARIABLES-----

	$NoControl=$_POST['NoControl'];
	$Nombre=$_POST['Nombre'];
	$Apellido= $_POST['Apellido'];
	$Grupo=$_POST['Grupo'];
	$Correo=$_POST['Correo'];
	$ID=$_POST['ID'];
	

	

//-----------------ACCIONES A REALIZAR------------------
	echo '<script>alert("Los datos se an actualizado correctamente. Verifiquelos por favor.")</script> ';
	$query=" UPDATE alumnos set NoControl='$NoControl',Nombre='$Nombre',Apellido='$Apellido',Grupo='$Grupo',Correo='$Correo' WHERE ID='$ID'";
	$resultado=$mysqli->query($query);
	echo "<script>location.href='RegistraU.php'</script>";


?>