<?php
    require_once("../CRUD/CRUD_bd_general.php");
    $conexion = new CRUD_general();
    $conexion->conexionBD();

    $password_actual = $_POST['passwordActual'];
    $password_nueva = $_POST['passwordNueva'];
    $password_comprobar = $_POST['passwordConfirmar'];

    $consulta = "SELECT password FROM administradores WHERE rfc = :rfc";
    $parametros = [":rfc"=>"QWER12345678"];
    $resultado = $conexion->MOSTRAR($consulta,$parametros);

    $password_bd = $resultado[0]['password'];

    /* $password_hash = password_hash($pass, PASSWORD_DEFAULT); */
    $password_actual_hash = hash('sha512', $password_actual);

    if($password_actual_hash == $password_bd){
        if($password_nueva == $password_comprobar){

            $password_nueva_hash = hash('sha512', $password_nueva);

            $sql = "UPDATE administradores SET password=:pass WHERE rfc=:rfc";
            $parametros = [":pass"=>$password_nueva_hash, ":rfc"=>"QWER12345678"];
            $resultado = $conexion->INSERTAR_ELIMINAR_ACTUALIZAR($sql,$parametros);
            
            
            if($resultado){
                $mensaje_evento = "Se actualizo la contraseña con exito";
                $data =["mensaje"=>$mensaje_evento];
                header("Content-Type: application/json");
                echo json_encode($data);
            }
            else{
                $mensaje_evento = "No se pudo actualizar la contraseña";
                $data =["mensaje"=>$mensaje_evento];
                header("Content-Type: application/json");
                echo json_encode($data);
            }
        }
        else{
            $mensaje = "Las contraseñas no coinciden";
            $data = ["mensaje"=>$mensaje];
            header("Content-Type: application/json");
            echo json_encode($data);
        }
    }
    else{
        $mensaje = "La contraseña actual no coincide con la contraseña de la base de datos";
        $data = ["mensaje"=>$mensaje];
        header("Content-Type: application/json");
        echo json_encode($data);
    }
?>