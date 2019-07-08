<?php
        $host="localhost";
        $user="root";
        $pass="";
        $bd="test";

        $conexion = new mysqli($host,$user,$pass,$bd);

        if ($conexion -> connect_errno) {
            echo("Conexión fallida ".$conexion->connect_errno);
            exit();
        }
?>