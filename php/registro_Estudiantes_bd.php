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

    /* Selecciona el valor que se ha seleccionado en participacion */
    if($participacion == "espectador"){
        $participacion = 0;
    }else{
        $participacion = 1;
    }

    /* Verifica que el campo password y el confirmPassword sean iguales*/
    if($password == $confirm_password){

        $password = hash('sha512', $password);

        $consulta = "INSERT INTO alumnos (Cor_Elec, Nombres, AP, AM, NC, Pass, Participacion) VALUES ('$correo', '$nombre', '$ap', '$am', '$correo', '$password', '$participacion')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado){
            /* Enviar una alerta por una ventana */
            echo "<script>
                    alert('Registro exitoso');
                    window.location= 'loginAlumno.php'
                </script>";
            }else{
                echo "<script>
                    alert('Error al registrar');
                    window.location= 'loginAlumno.php'
                </script>";

                /*  */
            }

    }else{
        echo "<script>
                alert('Las contraseñas no coinciden');
                window.location= 'registroAlumno.php'
            </script>";
    }

?>
