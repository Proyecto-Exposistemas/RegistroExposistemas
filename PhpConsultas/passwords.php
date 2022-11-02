<?php
    require_once("../CRUD/CRUD_bd_general.php");
    $conexion = new CRUD_general();
    $conexion->conexionBD();

    $password_actual = $_POST['passwordActual'];
    $password_nueva = $_POST['passwordNueva'];
    $password_comprobar = $_POST['passwordConfirmar'];
    
    /* Extrae los datos de la base */
    $consulta = "SELECT password FROM administradores WHERE rfc = :rfc";
    $parametros = [":rfc"=>"QWER12345678"];
    $resultado = $conexion->MOSTRAR($consulta,$parametros);

    $password_bd = $resultado[0]['password'];


    if(password_verify($password_actual, $password_bd)){

        if($password_nueva == $password_comprobar){
            $password_nueva_hash = password_hash($password_nueva, PASSWORD_DEFAULT);

            $consulta = "UPDATE administradores SET password = :password WHERE rfc = :rfc";
            $parametros = [":password"=>$password_nueva_hash, ":rfc"=>"QWER12345678"];
            $resultado = $conexion->INSERTAR_ELIMINAR_ACTUALIZAR($consulta,$parametros);

            if($resultado){
                $mensaje = "Contraseña actualizada correctamente";
                $data = ["mensaje"=>$mensaje];
                header('Content-Type: application/json');
                echo json_encode($data);
            }
            else{
                $mensaje = "Error al actualizar la contraseña";
                $data = ["mensaje"=>$mensaje];
                header('Content-Type: application/json');
                echo json_encode($data);
            }
        }
        else{
            $mensaje = "Las contraseñas no coinciden";
            $data = ["mensaje"=>$mensaje];
            header('Content-Type: application/json');
            echo json_encode($data);
        }

    }
    else{
        $mensaje = "La contraseña actual no es correcta";
        $data = ["mensaje"=>$mensaje];
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    /* $password_hash = password_hash($pass, PASSWORD_DEFAULT); */
    /* $mensaje = "Contraseña incorrecta";
    $data = ["mensaje"=>$mensaje];
    header("Content-Type: application/json");
    echo json_encode($data); */    
?>