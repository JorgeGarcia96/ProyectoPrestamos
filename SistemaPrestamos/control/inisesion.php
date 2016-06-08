<?php 

	require "enlacebd.php";

	include "../modulos/cabeceras.php";

	if(isset($_COOKIE[session_name()])){
		session_start();
		session_unset();
		session_destroy();
		setcookie(session_name(),"",time() - 3600,"","");
		session_write_close();
	}

	$mensaje = ""; 

	$datos = $_POST;

	if($datos["loginemail"]=="" xor $datos["passwd"]==""){
		$mensaje = "Debe introducir nombre de usuario y clave de accesos";
	}elseif($datos["loginemail"]!="" && $datos["passwd"]!=""){
		$sql="select * from usuario where (login = '".$datos['loginemail']."' or email = '".$datos['loginemail']."')".
				" and passwd = '".$datos['passwd']."'";

		$rusuario = mysqli_query($ml,$sql) or die(mysqli_error($ml));

		if(mysqli_num_rows($rusuario)>0){

			$fusuario = mysqli_fetch_assoc($rusuario);

			if($fusuario['activo']!=1){
				$mensaje = "Cuanta desactivada";
			}else{
				$ip = sha1($_SERVER['REMOTE_ADDR']);
				session_start();
				$_SESSION['usuario'] = $fusuario['login'];
				$_SESSION['passwd'] = $fusuario['passwd'];
				$_SESSION['ip'] = $ip;
				$_SESSION['priv'] = $fusuario['priv'];
				session_name("CONTROLCITAS");
				setcookie(session_name(), session_id(), time() + 3600, "/utem/", "localhost");

				switch ($fusuario['priv']) {
					case '1':header("Location: ../admin/index.php");						
						break;
					case '2':header("Location: ../index.php");						
						break;
				}
				
			}

		}else{
			$mensaje = "Usuario no registrado";
		}
	}







	?>


	<div class="principal">
	<div class="formulario">
		<fieldset>
			<legend>Inicio de sesi&oacute;n</legend>
			<form action="inisesion.php" method="post">
				<h5><i>Los campos marcados con * son opbligatorios</i></h5>
				<table>
					<tr>
						<td><label for="loginemail">Usuario o email: *</label></td>
						<td><input id="loginemail" name="loginemail" type="text" size="60" maxlength="60" placeholder="" /></td>						
					</tr>
					<tr>
						<td><label for="passwd">Clave de acceso: *</label></td>
						<td colspan="2"><input required="required" id="passwd" name="passwd" type="password" size="20" maxlength="20" /></td>
					</tr>
				</table>
				<span class="aviso"><?=$mensaje;?></span>
			<input type="submit" value="Inisiar sesi&oacute;n" />				
			</form>
		</fieldset>
	</div>
</div>

<?php
	include "../modulos/pie.php";
?>