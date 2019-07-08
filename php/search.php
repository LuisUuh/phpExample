<script src="./js/modificar.js"></script>
<?php
include('conexion.php');

$tabla="";
$query="SELECT * FROM bikes ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['bikes']))
{
	$q=$conexion->real_escape_string($_POST['bikes']);
	$query="SELECT * FROM bikes WHERE
		id LIKE '%".$q."%' OR
		name LIKE '%".$q."%' OR
		description LIKE '%".$q."%' OR
		price LIKE '%".$q."%' OR
		date LIKE '%".$q."%'";
}
$buscarB=$conexion->query($query);
if ($buscarB->num_rows > 0)
{
	$tabla.=
	'<table class="TabEdit table table-hover">
		<tr>
			<th class="tituloTab">ID</th>
			<th class="tituloTab">NOMBRE</th>
			<th class="tituloTab">APELLIDO</th>
			<th class="tituloTab">TELEFONO</th>
			<th class="tituloTab">DIRECCION</th>
			<th class="tituloTab">Editar</th>
			<th class="tituloTab">Eliminar</th>
		</tr>';

	while($filaB= $buscarB->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaB['id'].'</td>
			<td><input type="text" class="nombre" value="'.$filaB['name'].'" maxlength="50"></td>
			<td><input type="text" class="descripcion" value="'.$filaB['description'].'" maxlength="50"></td>
			<td><input type="text" class="precio" value="'.$filaB['price'].'" maxlength="21"></td>
			<td><input type="text" class="fecha" value="'.$filaB['date'].'" maxlength="50"></td>
			<td><button class="modificar btn btn-danger" data-id="'.$filaB['id'].'">Modificar</button></td>
			<td><a class="eliminar" href="" data-id="'.$filaB['id'].'"><img src="img/borrar.png" alt="eliminar" width="60"></a></td>
		 </tr>
		';
	}
	$tabla.='</table>';
} else
	{
		$tabla='
		<p class="mensajeNoHay">
		<img src="img/jajaj.png" alt="upps!">
		No se encontraron coincidencias ;-(</p>
		';

	}
echo $tabla;
?>