<?php

    $host = "localhost";
    $user = "root";
    $password = "1234";
    $db = "distribucionesgarcia";
    $conexion = new mysqli($host,$user,$password,$db);
        if ($conexion->connect_errno) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        exit;
        }

?>