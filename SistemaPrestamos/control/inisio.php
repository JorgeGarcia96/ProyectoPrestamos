<html>
<head>
	
	 <meta charset="utf-8" />
		 <link rel="stylesheet" type="text/css" href="css/styles.css" />
		 <link rel="stylesheet" type="text/css" href="css/pie.css" />
		  <link rel="stylesheet" type="text/css" href="css/movil.css" />
		  <link rel="stylesheet" type="text/css" href="css/fotos.css" />
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		 <script src="scripts/jflow.plus.min.js" type="text/javascript"></script>
</head>


<body>
<div class="cabecera"> 
	<a href="http://www.utmanzanillo.net/index.php"><img class="logoutem" src="img/baner1.jpg" width="960px"></a>
</div>


	

			<!-- INGRESAR BOTON COMPARTIR -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=281403338621077&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


     
		<fieldset id="imagen" >
		 <h1 class="sub-title"><strong>Iniciar Sesión</strong> <br /> </h1>
			
			<div id="formContainer">
			<form action="validacion.php" id="login" method="post">
				<h4><i>.............................................................</i></h4>
				<h4><i>Porfavor rellene todos los campos.</i></h4>
				

				<table>
					
					<tr>
						
						<td><input style="border-radius:15px;" id="loginemail" name="usuarioo" type="text" size="60" value="usuario" maxlength="60" placeholder="" required="required"/></td>
					</tr>
					<tr>
						
						<td colspan="2"><input style="border-radius:15px;" required="required" id="passwd" name="pass" value="contraseña" type="password" size="60" maxlength="20" required="required"/></td>
					</tr>

				</table>

			


				<input type="submit" id="submit" value="Iniciar sesion">
					

			</form>

			</div>
			
</fieldset>

			<!-- INGRESAR BOTON COMPARTIR -->
            
   <div class="contenido3">     	
        <P class="contenidotitulo"> REDES SOCIALES <br /></P>
        <!-- Cometanrios en pagina para facebook 
        <div class="centrar">
        	<fb:comments href="http://utmanzanillo.edu.mx/" width="200" numposts="5" colorscheme="light"></fb:comments>        	
        </div>-->
        <div class="centrar">
             <img src="img/fb.png" /> <br />
        	 <fb:share-button href="https://www.facebook.com/jorge.garciafacio"></fb:share-button>  
             <span class='st_fblike' displayText='Facebook Like'></span>      	
        </div>       
     
</div>         
<footer> 
		<p id="ti">
			Universidad Tecnol&oacute;gica de Manzanillo - Todos los derechos reservados.<br>
			Camino hacias las humedades S/N, Salagua, Manzanillo, Colima.<br>
			Teléfono 314 33 14450 &oacute; consulta nuestro <a href="../universidad/directorio.php" target="_self">directorio telefónico</a>, E-mail: utem@utem.edu.mx </p>
		</footer> 



		<section id="photos">
			<ul>
				<li><a href="" title="Apo Island, Philippines"><img src="img/recite-1u10rj.png"></a></li>
				<li><a href="" target="_blank" title="Angkor, Cambodia"><img src="img/recite-15d9dpf.png" ></a></li>
				<li><a href="" target="_blank" title="Parque Ambue Ari, Bolivia"><img src="img/recite-19sun3c.png" ></a></li>
				<li><a href="" target="_blank" title="Uyuni Salt Flats, Bolivia"><img src="img/recite-b63tp.png"></a></li>
                <li><a href="" target="_blank" title="Mendoza, Argentina"><img src="img/recite-33x0ke.png" "></a></li>
			</ul>
		</section>
</body>

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
</html>