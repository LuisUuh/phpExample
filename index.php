<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Store</title>
    <!-- estilosNormales -->
    <link rel='stylesheet' href='./css/style.css'>
    <!-- linkBootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


        </head>
<body>
    <header>
    </header>
    <section class="container">
        <div class="row">
            <form class="col col-4 col-md-4" action="./php/functions.php" method="post">
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control"  name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea name="description" class="form-control"  id="description" cols="30" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" class="form-control"  name="price">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" value="<?php
                            echo date("Y-m-d");
                    ?>" name="date" id="date">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger"  value="Guardar">
                </div>
            </form>
        </div>
    </section>
    <section>
        <h2>List</h2>
      
    <?php include("./php/conexion.php"); ?>
        <div class="input-group col col-4">
		<input id="busqueda" type="text" class="form-control" placeholder="Buscar..." name="busqueda" >
        </div>
        <div id="tabla_resultado" class="col col-3"></div>
    </section>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./js/search.js"></script>
    <!-- <script src="./js/modificar.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>