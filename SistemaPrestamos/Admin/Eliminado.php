<?php

//-------------CONECCION----------
	require('/2daconeccion/conexion.php');
//------------------LO QUE RESIBIMOS GUARDADO EN BARIABLES-----
	
	$id=$_GET['ID'];

//-----------------ACCIONES A REALIZAR------------------
	echo '<script>alert("Los datos se han eliminado.")</script> ';
	$query=" DELETE FROM productos WHERE ID='$id'";
	$resultado=$mysqli->query($query);
	echo "<script>location.href='producto.php'</script>";


?>