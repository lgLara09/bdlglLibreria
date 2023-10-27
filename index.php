<?php session_start(); ?>
<html>
<head>
	<title>Pagina principal</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Bienvenido a mi libreria!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Bienvenido <?php echo $_SESSION['name'] ?> ! <a href='cerrar_sesion.php'>Cerrar sesion</a><br/>
		<br/>
		<a href='ver.php'>Ver y agregar productos</a>
		<br/><br/>
	<?php	
	} else {
		echo "Debe inciar sesion para ver esta pagina.<br/><br/>";
		echo "<a href='inicio_sesion.php'>Iniciar sesion</a> | <a href='registrar.php'>Registrate</a>";
	}
	?>
	<div id="footer">
		Creado por <a href="https://lglara09.github.io/Proyecto_PaginaWeb_Actividad6/" title="Mukesh Chapagain">Lizbeth Garcia</a>
	</div>
</body>
</html>
