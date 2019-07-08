<?php 
	include "conexion.php";
/* Modificar datos */
	if($_POST['Caso']=="Modificar"){
	$id = $_POST['Id'];
	$nombre= $_POST['Nombre'];
	$descripcion= $_POST['Descripcion'];
	$precio= $_POST['Precio'];
	$fecha= $_POST['Fecha'];

	$consultar = "UPDATE bikes SET name='$nombre', description='$descripcion', price='$precio', date='$fecha'
	WHERE id='$id' ";
	$resultados = $conexion -> query($consultar)||die("ha ocurrido un error al guardar los datos");
	if ($resultados) {
		echo "Se ha modificado correctamente!";
	}
}

/*Eliminar datos*/

if($_POST['Caso']=="Eliminar"){
	$id = $_POST['Id'];
	$consulta = "DELETE FROM bikes WHERE id='$id'";
	$resultado = $conexion -> query($consulta) || die("Ha ocurrido un error al eliminar los datos");
	if ($resultado) 
	{
		echo "Se ELIMINO el Correctamente";
	}
}
?>

