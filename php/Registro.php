<?php
include_once("../CRUD/CRUD_bd_general.php");

$conexion = new CRUD_general();
$conexion->conexionBD();

if(isset($_POST['identdad']) && isset($_POST['nombre']) && isset($_POST['ap']) && isset($_POST['am']) && isset($_POST['correo'])){
    $nivel = $_POST['identdad'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap'];
    $ap_materno = $_POST['am'];
    $correo = $_POST['correo'];


    if($nivel == 1 && isset($_POST['telefono']) && isset($_POST['numeroControl']) && isset($_POST['semestre'])){

        $semestre = $_POST['semestre'];
        $numero_control = $_POST['numeroControl'];
        $telefono = $_POST['telefono'];
        //tabla total alumnos
        //tabla alumnos
        $sql = "INSERT INTO alumnos (nombre, paterno, materno, semestre, no_control, correo, telefono) VALUES(:nom,:pa,:ma,:semestre,:noControl,:correo,:tele)";
        $parametros = [":nom"=>$nombre, ":pa"=>$ap_paterno, ":ma"=>$ap_materno, ":semestre"=>$semestre, ":noControl"=>$numero_control, ":correo"=>$correo, ":tele"=>$telefono];
       
        $registros = $conexion->MOSTRAR("SELECT nombre FROM alumnos WHERE no_control=:no_con", [":no_con"=>$numero_control]);
        if(count($registros) > 0){

            $mensaje = "El alumno ya esta registrado";
            $error=true;

        }else{

            $resultado = $conexion->INSERTAR_ELIMINAR_ACTUALIZAR($sql,$parametros);  
       
            if($resultado){
                $mensaje = "Registro exitoso";
                $error=false;
            }else{
                $mensaje = "No se ha podido realizar el registro";
                $error=true;
            }
        }
        
        $conexion->CERRAR_CONEXION();
        //regresa el tipo JSON con el mensaje
        $data = ["mensaje"=> $mensaje,"error"=>$error];
        header("Content-Type: application/json");
        echo json_encode($data);
        

    }else if($nivel == 2 && isset($_POST['telefono']) && isset($_POST['titulo']) && isset($_POST['funcion']) && isset($_POST['rfc'])){

        $telefono = $_POST['semestre'];
        $titulo = $_POST['numeroControl'];
        $funcion = $_POST['telefono'];
        $rfc = $_POST['rfc'];

        //tabla de docentes
        $sql = "INSERT INTO docentes (nombre,paterno,materno,funcion,correo,telefono,rfc,titulo) VALUES(:nom,:apep,:apem,:funcion,:correo,:tele,:rfc,:titulo)";
        $parametros = [":nom"=>$nombre,":apep"=>$ap_paterno,":apem"=>$ap_materno,":funcion"=>$funcion,":correo"=>$correo,":tele"=>$telefono,":rfc"=>$rfc,":titulo"=>$titulo];

        $registros = $conexion->MOSTRAR("SELECT nombre FROM docentes WHERE rfc=:rfc", [":rfc"=>$rfc]);

        if(count($registros) > 0){

            $mensaje = "El docente ya esta registrado";
            $error=true;

        }else{

            $resultado = $conexion->INSERTAR_ELIMINAR_ACTUALIZAR($sql,$parametros);  
       
            if($resultado){
                $mensaje = "Registro exitoso";
                $error=false;
            }else{
                $mensaje = "No se ha podido realizar el registro";
                $error=true;
            }
        }
        
        $conexion->CERRAR_CONEXION();
        //regresa el tipo JSON con el mensaje
        $data = ["mensaje"=> $mensaje,"error"=>$error];
        header("Content-Type: application/json");
        echo json_encode($data);
        

    }else if($nivel == 3 && isset($_POST['roles']) && isset($_POST['procedencia'])){

        $roles = $_POST["roles"];
        $procedencia = $_POST['procedencia'];
        

        //tabla de docentes
        $sql = "INSERT INTO docentes (nombre,paterno,materno,funcion,correo,telefono,rfc,titulo) VALUES(:nom,:apep,:apem,:funcion,:correo,:tele,:rfc,:titulo)";
        $parametros = [":nom"=>$nombre,":apep"=>$ap_paterno,":apem"=>$ap_materno,":funcion"=>$funcion,":correo"=>$correo,":tele"=>$telefono,":rfc"=>$rfc,":titulo"=>$titulo];

        $registros = $conexion->MOSTRAR("SELECT nombre FROM docentes WHERE rfc=:rfc", [":rfc"=>$rfc]);

        if(count($registros) > 0){

            $mensaje = "El docente ya esta registrado";
            $error=true;

        }else{

            $resultado = $conexion->INSERTAR_ELIMINAR_ACTUALIZAR($sql,$parametros);  
       
            if($resultado){
                $mensaje = "Registro exitoso";
                $error=false;
            }else{
                $mensaje = "No se ha podido realizar el registro";
                $error=true;
            }
        }
        
        $conexion->CERRAR_CONEXION();
        //regresa el tipo JSON con el mensaje
        $data = ["mensaje"=> $mensaje,"error"=>$error];
        header("Content-Type: application/json");
        echo json_encode($data);
        

    }
    
}







?>