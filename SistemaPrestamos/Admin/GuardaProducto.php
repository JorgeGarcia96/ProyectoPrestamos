<?php
	$NoInventario=$_POST['NoInventario'];
	$Nombre=$_POST['Nombre'];
	$Descripcion=$_POST['Descripcion'];
	$Modelo=$_POST['Modelo'];
	$Ubicacion=$_POST['Ubicacion'];
	
	echo$NoInventario;
	echo$Nombre;
	echo$Descripcion;
	echo$Modelo;
	echo$Ubicacion;

	//------------------------------------------------------------OK

require("../control/enlacebd.php");
//------------------------------------------------------------OK

mysql_query("INSERT INTO productos VALUES('','$NoInventario','$Nombre','$Descripcion','$Modelo','$Ubicacion')");

header('Location: producto.php');


//echo "<script>location.href='registrolibro.php'</script>";	
?>