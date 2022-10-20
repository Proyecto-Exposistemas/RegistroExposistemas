<?php
    /* Declaración de los valores de las variables para la conexion a la base de datos */
    $servidor = "localhost";
    $administrador = "root";
    $password = "";
    $baseDatos = "expo_sistemas";

    $tabla = "alumnos";

    /* Declaración de la conexion a la base de datos en mysql */
    $conexion = mysqli_connect($servidor,$administrador,$password,$baseDatos);
?>