<?php
    include 'conexiones.php';

    /*Obten el correo y la contraseña de la tabla alumnos */
    $correoInput = $_POST['inputCorreo'];
    $passwordInput = $_POST['inputPassword'];

   /*  Verifica que el campo correo y el campo password no se encuentren vacios */
    if (!empty($correoInput) && !empty($passwordInput)) {
        
        $resultado = mysqli_query($conexion,"SELECT Cor_Elec, Pass FROM $tabla where Cor_Elec = '$correoInput'");

        /* Fetching the result of the query. */
        $fila = mysqli_fetch_array($resultado);

        $correo = $fila['Cor_Elec'];
        $password = $fila['Pass'];

        /* verifica que los campos de correo y contraseña no estén vacios */
        if (!empty($correo) && !empty($password)) {
    
            /* verifica que el correo y la contraseña sean iguales a los que se encuentran en la base de datos */
            if ($correo == $correoInput && $password == hash('sha512', $passwordInput)) {
                
                /* Envia una alerta de que el usuario se ha logeado correctamente */
                echo "<script>
                        window.location = 'QR.html'
                    </script>";

                include 'close_conexiones.php';
            }
            else{
                echo "<script>
                        alert('Correo o contraseña incorrectos');
                        window.location = 'loginAlumno.php'
                    </script>";
            }
        }
        else{
            echo "<script>
                    alert('Correo o contraseña incorrectos');
                    window.location = 'loginAlumno.php'
                </script>";
        }

    } 
    else {
        /* eniva una alerta que contenga que los datos no pueden estar vacios y redireccione al login estudiantes */

        echo "<script>
            alert('Los datos no pueden estar vacios');
            window.location= 'loginAlumno.php'
            </script>";
    } 
?>