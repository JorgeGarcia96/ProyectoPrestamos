<?php
	$NoControl=$_POST['NoControl'];
	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Grupo=$_POST['Grupo'];
	$Correo=$_POST['Correo'];
	
	echo$NoControl;
	echo$Nombre;
	echo$Apellido;
	echo$Grupo;
	echo$Correo;

	//------------------------------------------------------------OK

require("../control/enlacebd.php");
//------------------------------------------------------------OK

mysql_query("INSERT INTO Alumnos VALUES('','$NoControl','$Nombre','$Apellido','$Grupo','$Correo')");

header('Location: RegistraU.php');


//echo "<script>location.href='registrolibro.php'</scrControl