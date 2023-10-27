<html>
<head>
	<title>Agregar</title>
</head>

<body>
<?php
    session_start(); 

if(!isset($_SESSION['valid'])) {
	header('Location: inicio_sesion.php');
}


//incluir la conexion de la base de datos
include_once("connection.php");

if(isset($_POST['Submit'])) {
    $id = $_SESSION['id'];	
	$id_renta = $_POST['id_renta'];
	$id_libro = $_POST['id_libro'];
    $id_usuario = $_POST['id_usuario'];
	$id_empleado = $_POST['id_empleado'];
    $num_factura = $_POST['num_factura'];
    $num_telefono = $_POST['num_telefono'];
    $direccion = $_POST['direccion'];
    $tiempo_renta = $_POST['tiempo_renta'];
    $pago = $_POST['pago'];
    $num_cuenta = $_POST['num_cuenta'];
    $tipo_tarjeta = $_POST['tipo_tarjeta'];
		
	// checando que los campos esten rellenos
	if(empty($id_renta) || empty($id_libro) || empty($id_usuario) ||  empty($id_empleado) || empty($num_factura) || empty($num_telefono)
    || empty($direccion)|| empty($tiempo_renta)|| empty($pago)|| empty($num_cuenta)|| empty($tipo_tarjeta)) {
				
		if(empty($id_renta)) {
			echo "<font color='red'>El campo renta esta vacio.</font><br/>";
		}
		
		if(empty($id_libro)) {
			echo "<font color='red'>El campo libro esta vacio.</font><br/>";
		}

        if(empty($id_usuario)) {
			echo "<font color='red'>El campo usuario esta vacio.</font><br/>";
		}
		
		if(empty($id_empleado)) {
			echo "<font color='red'>El campo empleado esta vacio.</font><br/>";
		}
        if(empty($num_factura)) {
			echo "<font color='red'>El campo factura esta vacio.</font><br/>";
		}
        if(empty($num_telefono)) {
			echo "<font color='red'>El campo numero de telefono esta vacio.</font><br/>";
		}
        if(empty($direccion)) {
			echo "<font color='red'>El campo direccion esta vacio.</font><br/>";
		}
        if(empty($tiempo_renta)) {
			echo "<font color='red'>El campo tiempo de renta esta vacio.</font><br/>";
		}
        if(empty($pago)) {
			echo "<font color='red'>El campo pago esta vacio.</font><br/>";
		}
        if(empty($num_cuenta)) {
			echo "<font color='red'>El campo numero de cuenta esta vacio.</font><br/>";
		}
        if(empty($tipo_tarjeta)) {
			echo "<font color='red'>El campo tipo de tarjeta esta vacio.</font><br/>";
		}
		
		//link que te regresa a la pagina anterior
		echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
	} else { 
		// Si todos los campos no estan vacios 
			
		//insertar datos a la base de datos	
		$result = mysqli_query($mysqli, "INSERT INTO `renta`(`id`, `id_renta`, `id_libro`, `id_usuario`, `id_empleado`, `num_factura`, `num_telefono`, `direccion`, `tiempo_renta`, `pago`, `num_cuenta`, `tipo_tarjeta`) VALUES('$id', '$id_renta','$id_libro', '$id_usuario', '$id_empleado', '$num_factura', '$num_telefono','$direccion', '$tiempo_renta', '$pago', '$num_cuenta', '$tipo_tarjeta')");
		
		//Te envia un mensaje
		echo "<font color='green'>Datos agregados correctamento.";
		echo "<br/><a href='ver.php'>Ver productos</a>";
	}
}
?>
</body>
</html>
