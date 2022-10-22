<?php
    include '../conexiones.php';

    /* Detecta cual botón fue pulsado */
    if(isset($_POST['btn-enviar'])){
        echo "Boton enviar";
        /* $nombre_actividad = $_POST['NombreActividad'];
        $numero_actividad = $_POST['NumeroActividad'];
        $tema_actividad = $_POST['temaActividad'];
        $materia = $_POST['Materia'];
        $hora_inicio = $_POST['HoraInicio'];
        $hora_fin = $_POST['HoraFinal'];

        $hora_inicio = $hora_inicio . ":00";
        $hora_fin = $hora_fin . ":00";

        $consulta = "INSERT INTO `evento` (`no_evento`, `evento`, `hora_inicio`, `hora_fin`) VALUES ($numero_actividad, '$nombre_actividad', '$hora_inicio', '$hora_fin')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado){
            echo "Registro exitoso";
        }else{
            echo "Error al registrar";
        } */
    }else if(isset($_POST['btn-cancelar'])){
        echo "Boton cancelar";
    }
    else if(isset($_POST['btn-eliminar'])){
        echo "Boton eliminar";
    }
    else if(isset($_POST['btn-modificar'])){
        echo "Boton modificar";
    }

    /* cierra la conexion */
    mysqli_close($conexion);
?>