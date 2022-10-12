<?php
    include 'conexiones.php';

    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $nc = $_POST['nc'];
    $correo = $_POST['correo'];
    $participacion = $_POST['participacion'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];


    /* Crea un condicional en donde pregunte que todos los campos del formulario no se encuentren vacios */
    if (!empty($nombre) && !empty($ap) && !empty($am) && !empty($nc) && !empty($correo) && !empty($participacion) && !empty($password) && !empty($confirm_password)) {

        /* Verifica que tipo de participacion tendrá*/
        if($participacion == "espectador"){
            $participacion = 0;
    
        }else{
            $participacion = 1;
        }
    
        /* Verifica que el campo password y el confirmPassword sean iguales*/
        if($password == $confirm_password){
    
            $password = hash('sha512', $password);
    
            $consulta = "INSERT INTO alumnos (Cor_Elec, Nombres, AP, AM, NC, Pass, Participacion) VALUES ('$correo', '$nombre', '$ap', '$am', '$nc', '$password', '$participacion')";
    
            $resultado = mysqli_query($conexion, $consulta);
    
            if($resultado){
                /* Enviar una alerta por una ventana */
                echo "<script>
                        alert('Registro exitoso');
                        window.location = 'loginAlumno.php'
                    </script>";
            }
            else{
                echo "<script>
                    alert('Error al registrar');
                    window.location = 'loginAlumno.php'
                </script>";
            }
        }

        else{
            echo "<script>
                    alert('Las contraseñas no coinciden');
                    window.location = 'loginAlumno.php'
                </script>";
        }


    } else {
        /* Envia una alerta para rellenar todos los campos */
        echo "<script>
            alert('Rellena todos los campos');
            window.location = 'loginAlumno.php'
        </script>";
    }

?>