<?php
    include '../conexiones.php';

    $nombre_actividad = $_POST['NombreActividad'];
    $numero_actividad = $_POST['NumeroActividad'];
    $tema_actividad = $_POST['temaActividad'];
    $materia = $_POST['Materia'];
    $hora_inicio = $_POST['HoraInicio'];
    $hora_fin = $_POST['HoraFin'];

    /* Imprime los valores de todas las variables */
    echo $nombre_actividad;
    echo $numero_actividad;
    echo $tema_actividad;
    echo $materia;
    echo $hora_inicio;
    echo $hora_fin;
    
?>