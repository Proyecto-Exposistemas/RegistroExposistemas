<?php
    /* Declaración de los valores de las variables para la conexion a la base de datos */
    $servidor = "localhost";
    $administrador = "root";
    $password = "";
    $baseDatos = "expo_sistemas";

    /* Declaración de la conexion a la base de datos en mysql */
    $conexion = mysqli_connect($servidor,$administrador,$password,$baseDatos);

    if(!$conexion){
        echo 'No se puede realizar la conexion a la base de datos, favor de verificar los datos de conexion';
    }else{
        echo 'Conexion a la base de datos completada de manera exitosa';
    }

    /* Declaración del codigo para extraer los datos para el form */
    
?>