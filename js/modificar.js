$(document).ready(function(){
    /* Modificar */
        $(".modificar").click(function(){
            var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
            var descripcion=$(this).parent('td').parent('tr').find('.descripcion').val();
            var precio=$(this).parent('td').parent('tr').find('.precio').val();
            var fecha=$(this).parent('td').parent('tr').find('.fecha').val();
            $.post('./php/modificar.php',{
                Caso:'Modificar',
                Id:$(this).attr('data-id'),
                Nombre:nombre,
                Descripcion:descripcion,
                Precio:precio,
                Fecha:fecha
            },function(e){
                alert(e);
            });
        });
    /*Eliminar*/
        $(".eliminar").click(function(e){
            var cliEliminar=confirm("Realmete deseas eliminar?")
                    if (cliEliminar==true) {
                        e.preventDefault();
                        $(this).parent('td').parent('tr').remove();
                        $.post('./php/modificar.php',{
                        Caso:'Eliminar',
                        Id:$(this).attr('data-id')
                    },function(e){
                        alert(e);
                    });
                }else{
                    return false;
            }
        });
    });