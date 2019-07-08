<?php
        $name = $_POST["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $date = $_POST["date"];

        // echo($name);
        // echo($description);
        // echo($price);
        // echo($date);
        include("./conexion.php");

        $sql = "INSERT INTO bikes(name, description, price, date) VALUES('$name','$description', '$price', '$date')";

        $rest = $conexion -> query($sql)||die("upps");
        if ($rest == true) {
            echo("RB");
        }
?>
<!-- $verificar_usuario = mysqli_query($conexion, "SELECT * FROM users WHERE usuario = '$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>
             alert("El usuario ya esta registrado");
             window.history.go(-1);
             </script>';     
    exit;} -->