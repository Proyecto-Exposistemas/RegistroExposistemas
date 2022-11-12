<?php
  class Peticion{
    function comprobar(){
        include_once("../CRUD/CRUD_bd_general.php");
        //se registra a los externos, docentes o alumnos en la bd, y se manda un identificador
        //para que se cree su codigo qr
        $conexion = new CRUD_general();
        $conexion->conexionBD();

        $identificador_numero_control=$_POST['numeroControl'];
        $identificador_rfc=$_POST['rfc'];
        $identificador_correo=$_POST['procedencia'];

        $nive=$_POST['identdad'];

        if($nive==1){
            $consulta="SELECT no_control FROM alumnos where no_control: no_contol ";
            $parametros = ["no_control" => $identificador_numero_control]
            $resultado=$conexion->Mostrar($consulta,$parametros);
            if(count($resultado)!=0){
                echo json_encode("No se encontro el numero de control");
            }
            else{
                echo json_encode("Este alumno ya esta registrado");
            }

        }
        
        


        
    } 
    $conexion->CERRAR_CONEXION();
  }
  /*$objeto=new Peticion;
  $objeto->comprobar(); 
  $mensaje = "Se ha llegado con éxito";
  $data = ["mensaje"=> $mensaje];
  header('Content-Type: application/json');
  echo json_encode($data);/*  
?>
