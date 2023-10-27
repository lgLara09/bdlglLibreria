<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: inicio_sesion.php');
}
$ID=$_SESSION['id'];
?>

<?php
//incluir conexion a la base de datos
include_once("connection.php");

//ordena los registros
$result = mysqli_query($mysqli, "SELECT * FROM renta WHERE id='$ID'");
?>

<html>
<head>
	<title>Pagina principal</title>
</head>

<body>
	<a href="index.php">Inicio</a> | <a href="agregar2.html">Agregar nuevos datos</a> | <a href="cerrar_sesion.php">Cerrar sesion</a>
	<br/><br/>
	
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Id_renta</td>
			<td>id_libro</td>
			<td>id_usuario</td>
			<td>id_empleado</td>
			<td>numero de factura</td>
			<td>numero de telefono</td>
			<td>Direccion</td>
			<td>Tiempo de renta</td>
			<td>Pago</td>
			<td>Numero de cuenta</td>
			<td>Tarjeta</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['id_renta']."</td>";
			echo "<td>".$res['id_libro']."</td>";
			echo "<td>".$res['id_usuario']."</td>";	
			echo "<td>".$res['id_empleado']."</td>";	
			echo "<td>".$res['num_factura']."</td>";	
			echo "<td>".$res['num_telefono']."</td>";	
			echo "<td>".$res['direccion']."</td>";	
			echo "<td>".$res['tiempo_renta']."</td>";	
			echo "<td>".$res['pago']."</td>";	
			echo "<td>".$res['num_cuenta']."</td>";	
			echo "<td>".$res['tipo_tarjeta']."</td>";	
			echo "<td><a href=\"editar.php?id=$res[id]\">Editar</a> | <a href=\"eliminar.php?id=$res[id_renta]\" onClick=\"return confirm('Estas seguro de que quieres borrar?')\">Eliminar</a></td>";		
		}
		?>
	</table>	
</body>
</html>
