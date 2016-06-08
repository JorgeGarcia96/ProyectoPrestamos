<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <style type="text/css">.tk-museo-slab{font-family:"museo-slab",serif;}
	.tk-futura-pt-condensed{font-family:"futura-pt-condensed",sans-serif;}
	</style>
	<script src="js/modernizr-2.5.3.min.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/code.css">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" type="text/css"  href="css/stilo.css" />
   <link rel="stylesheet" type="text/css"  href="css/menu.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
   
		
   
   <title>Sistema de Prestamos </title>
   
  
</head>
<body>

	
<!-- NAV -->
<header>
	<nav id="navbar">
		<ul class="nav clearfix">
			<li><a href="/SistemaPrestamos/control/inisio.php">salir</a></li>
			<li><a href="index.php">home</a></li>
			<li class="gap"><a href='producto.php'>Registrar Producto</a></li>
			<li><a href='RegistraU.php'>Registrar Usuario</a></li>
			<li><a href="#contact">Estatus De Prestamos</a></li>
			<li><a href="#contact">Buscar</a></li>
		</ul>
	</nav>

	<!-- LOGO -->
	<h1 id="logo">
		<a href="/">
			<img src="img/logo.png" href="http://www.utmanzanillo.net/">
		</a>
	</h1>
	</div>
</header>



	<section id="portfolio">
		<div class="wrapper">
			<h2 class="work">CONTOL DE PRESTAMOS</h>
			<h2 class="uni">Universidad tecnologica de manzanillo.</h2>
				<h2 clas="utem">UTeM</h2>
	
		</div>
	
		
			
					<?php
		

			require("/2daconeccion/conexion.php");
			$query="SELECT * FROM usuarios";
	
			$resultado=$mysqli->query($query);
			?>

					<?php
	
					?>
							<?php while($row=$resultado->fetch_assoc()){ ?>
						
							<h2 class="nombre">Bienvenido <?php echo $row['usuario'];?></h2>	
							<?php } ?>

							
</section>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>
<html>
