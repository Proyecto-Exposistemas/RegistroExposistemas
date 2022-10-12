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

        /* Encriptacion de la contraseña */
        $password = hash('sha512', $password);

        /* Inseccion de los datos en la base de datps */
        $consulta = "INSERT INTO alumnos (Cor_Elec, Nombres, AP, AM, NC, Pass, Participacion) VALUES ('$correo', '$nombre', '$ap', '$am', '$nc', '$password', '$participacion')";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado){
            /* Enviar una alerta por una ventana */
            echo "<script>
                    alert('Registro exitoso');
                </script>";

            /* Redireccionar a la pagina de QR.html mediante javascript*/
            echo "<script>
                    window.location = '../QR.html';
                </script>";

            }else{
                echo "<script>
                    alert('Error al registrar');
                </script>";

                header("location: ../loginAlumno.php");
            }
            
    }else{
        echo "<script>
                alert('Las contraseñas no coinciden');
            </script>";
            
        /* Redireccionar de nuevo a loginAlumnos por medio de Javascript */
        echo "<script>
                window.location = '../loginAlumno.php';
            </script>";
    }

?>
