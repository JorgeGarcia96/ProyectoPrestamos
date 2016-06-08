<?php
require("../control/enlacebd.php");
	$NoInventario=$_POST['NoInventario'];
	$NoControl=$_POST['NoControl'];
	$Nombre=$_POST['Nombre'];
	date_default_timezone_set('UTC');
	
	$fecha=date("Y-m-d");
$nuevafecha = strtotime ( '+10 day' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
  
	//------------------------------------------------------------OK

	
//------------------------------------------------------------OK


/////////////////////////////   VERIFICO QUE EL SOCIO ESTE EXISTENTE EN EL SISTEMA.......
	$Validacion=mysql_query("SELECT * FROM alumnos WHERE NoControl='$NoControl' AND Nombre='$Nombre");
	$check_mail=mysql_num_rows($Validacion);
		


		///////////////////    VERIFICO QUE EL LIBRO ESTE EXISTENTE EN EL SISTEMA.....
$Validacion2=mysql_query("SELECT * FROM productos WHERE NoInventario='$NoInventario'");
	$check_email=mysql_num_rows($Validacion2);
	

if ($validacion="true") {
	mysql_query("INSERT INTO prestamos VALUES('','$NoInventario','$NoControl','$fecha','$nuevafecha')");
				mysql_query("UPDATE productos SET Estado='Prestado' WHERE NoInventario='$NoInventario'");
				echo ' <script language="javascript">alert("Al alumnmo | '.$NoControl.' | se le ha prestado el producto | '.$NoInventario.' | con exito.");</script> ';
         		echo "<script>location.href='prestamo.php'</script>";
}else{
				echo ' <script language="javascript">alert("Lo sentimos el Producto   se encuentra disponible por el momento");</script> ';
				mysql_close($link);
				echo "<script>location.href='prestamo.php'</script>";

		}


	
?>