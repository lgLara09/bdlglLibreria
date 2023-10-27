<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: inicio_sesion.php');
}
?>

<?php
// incluir conexion a la base de datos
include_once("connection.php");

if(isset($_POST['update']))
{	
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
	if(empty($id_renta) || empty($id_libro) || empty($id_usuario) || empty($id_empleado) || empty($num_factura) || empty($num_telefono)
	 || empty($direccion) || empty($tiempo_renta) || empty($pago) || empty($num_cuenta) || empty($tipo_tarjeta)) {
				
		if(empty($id_renta)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($id_libro)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($id_usuario)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($id_empleado)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($num_factura)) {
			echo "<font color='red'>factura field is empty.</font><br/>";
		}	
		if(empty($num_telefono)) {
			echo "<font color='red'>telefono field is empty.</font><br/>";
		}	
		if(empty($direccion)) {
			echo "<font color='red'>direccion field is empty.</font><br/>";
		}
		if(empty($tiempo_renta)) {
			echo "<font color='red'>tiempo field is empty.</font><br/>";
		}
		if(empty($pago)) {
			echo "<font color='red'>pago field is empty.</font><br/>";
		}
		if(empty($num_cuenta)) {
			echo "<font color='red'>cuenta field is empty.</font><br/>";
		}
		if(empty($tipo_tarjeta)) {
			echo "<font color='red'>tarjeta field is empty.</font><br/>";
		}
	} else {	
		//eliminar una columna
		$result = mysqli_query($mysqli, "UPDATE renta SET id_renta='$id_renta', id_libro='$id_libro', id_usuario='$id_usuario', id_empleado='$id_empleado', num_factura='$num_factura', num_telefono='$num_telefono', direccion='$direccion', tiempo_renta='$tiempo_renta', pago='$pago', num_cuenta='$num_cuenta', tipo_tarjeta='$tipo_tarjeta' WHERE id='$id'");
		
		//redireccionando a la pagina principal, en este caso, ver.php
		header("Location: ver.php");
	}
}
?>
<?php
//Obtenindo el id por medio de URL
$id = $_SESSION['id'];

//selecciona el dato por medio del id
$result = mysqli_query($mysqli, "SELECT * FROM renta WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$id_renta = $res['id_renta'];
	$id_libro = $res['id_libro'];
	$id_usuario = $res['id_usuario'];
	$id_empleado = $res['id_empleado'];
	$num_factura = $res['num_factura'];
	$num_telefono = $res['num_telefono'];
	$direccion = $res['direccion'];
	$tiempo_renta = $res['tiempo_renta'];
	$pago = $res['pago'];
	$num_cuenta = $res['num_cuenta'];
	$tipo_tarjeta = $res['tipo_tarjeta'];
	
}
?>
<html>
<head>	
	<title>Editar Datos</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="ver.php">Ver resultados</a> | <a href="cerrar_sesion.php">Cerrar sesion</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editar.php">
		<table border="0">
		<tr> 
				<td>Id_renta</td>
				<td><input type="text" name="id_renta" value="<?php echo $id_renta;?>"></td>
			</tr>
			<tr> 
				<td>Id_libro</td>
				<td><input type="text" name="id_libro" value="<?php echo $id_libro;?>"></td>
			</tr>
			<tr> 
				<td>Id_usuario</td>
				<td><input type="text" name="id_usuario" value="<?php echo $id_usuario;?>"></td>
			</tr>
			<tr> 
				<td>Id_empleado</td>
				<td><input type="text" name="id_empleado" value="<?php echo $id_empleado;?>"></td>
			</tr>
			<tr> 
				<td>Numero de factura</td>
				<td><input type="text" name="num_factura" value="<?php echo $num_factura;?>"></td>
			</tr>
			<tr> 
				<td>Numero de telefono</td>
				<td><input type="text" name="num_telefono" value="<?php echo $num_telefono;?>"></td>
			</tr>
			<tr> 
				<td>Direccion</td>
				<td><input type="text" name="direccion" value="<?php echo $direccion;?>"></td>
			</tr>
			<tr> 
				<td>Tiempo de renta</td>
				<td><input type="text" name="tiempo_renta" value="<?php echo $tiempo_renta;?>"></td>
			</tr>
			<tr> 
				<td>Pago</td>
				<td><input type="text" name="pago" value="<?php echo $pago;?>"></td>
			</tr>
			<tr> 
				<td>Numero de cuenta</td>
				<td><input type="text" name="num_cuenta" value="<?php echo $num_cuenta;?>"></td>
			</tr>
			<tr> 
				<td>Tipo de Trajeta</td>
				<td><input type="text" name="tipo_tarjeta" value="<?php echo $tipo_tarjeta;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_SESSION['id'];?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
