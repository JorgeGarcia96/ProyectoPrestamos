<?php
//--------------------------------------------------------------------------------------------------------------------

require("enlacebd.php");
//--------------------------------------------------------------------------------------------------------------------
$username=$_POST['usuarioo'];
$passs=$_POST['pass'];
//--------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------
$sql2=mysql_query("SELECT * FROM usuarios WHERE usuario='$username'");
if($f2=mysql_fetch_array($sql2)){		
	if($passs==$f2['passwadmin']){
		
		echo '<script>alert("BIENVENIDO")</script> ';
		echo "<script>location.href='../admin/index.php'</script>";

	}
}
//--------------------------------------------------------------------------------------------------------------------
$sql=mysql_query("SELECT * FROM usuarios WHERE usuario='$username'");
	if($f=mysql_fetch_array($sql)){
		if($passs==$f['password']){

			header("Location:../usuario/index.php");
			
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='/SistemaPrestamos/control/inisio.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR ASEGURESE DE SER UN EXISTENTE EN EL SISTEMA.")</script> ';
		
		echo "<script>location.href='/SistemaPrestamos/control/inisio.php'</script>";	

	}
//--------------------------------------------------------------------------------------------------------------------
?>
