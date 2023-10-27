<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: inicio_sesion.php');
}
?>

<?php
//incluir conexion a la base de datos
include("connection.php");

//Obtenindo el id por medio de URL
$id = $_GET['id'];

//eliminar una columan de la tabla
$result=mysqli_query($mysqli, "DELETE FROM renta WHERE id_renta=$id");

//redireccionar a la pagina principal, en este caso, ver.php
header("Location:ver.php");
?>

