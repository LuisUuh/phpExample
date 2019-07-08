$(obtener_registros());

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});

function obtener_registros(bikes) {
  $.ajax({
    url: 'php/search.php',
		type: 'POST',
		dataType: 'html',
		data: { bikes: bikes },
    success: function(resultado) {
		$("#tabla_resultado").html(resultado);
    },
    error: function() {
      console.log("No se ha podido obtener la información");
    }
  });
}