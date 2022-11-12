<?php
    class Limpieza{
        function limpiar(){
            //echo json_encode("hola");
            include_once("../CRUD/CRUD_bd_general.php");
            $obj = new CRUD_general();
            $obj->conexionBD();

            //borrar los evetos de los alumnos
            $consulta = "DELETE FROM evento_alumnos";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            $consulta = "DELETE FROM asesores_evento";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            //borrar los eventos de los externos
            $consulta = "DELETE FROM evento_externos";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            //borrar todos los eventos
            $consulta = "DELETE FROM evento";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            //borrar los registros de asistencia
            $consulta = "DELETE FROM registros_alumnos";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            $consulta = "DELETE FROM registros_externos";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);


            $consulta = "DELETE FROM registros_ponentes_ext";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            //borrar a los externos
            $consulta = "DELETE FROM espectadores_externos";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            $consulta = "DELETE FROM ponentes_externos";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            //borrar a los alumnos
            $consulta = "DELETE FROM alumnos";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            //borrar a los docentes
            $consulta = "DELETE FROM docentes WHERE rfc != 'QWER12345678'";
            $parametro = [":selecion" => "10"];
            $resultado = $obj->Mostrar($consulta);

            echo json_encode("todo chido");

            //include_once('../Paginas/administrativo.php');
                        
        }
    }

    $obj = new Limpieza;
    $obj->limpiar();
?>