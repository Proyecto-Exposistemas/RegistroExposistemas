<?php
    include 'conexiones.php';

    /*Obten el correo y la contraseña de la tabla alumnos */
    $correoInput = $_POST['inputCorreo'];
    $passwordInput = $_POST['inputPassword'];

    echo $correoInput;
    echo $passwordInput;


    /* Verifica que el campo correo y el campo password no se encuentren vacios */
    if (!empty($correoInput) && !empty($passwordInput)) {
        /* Encripta la contraseña */
        $passwordInput = hash('sha512', $passwordInput);

        /* Crea una consulta para obtener el correo y la contraseña de la tabla alumnos */
        $consulta = "SELECT Cor_Elec, Pass FROM alumnos WHERE Cor_Elec = '$correoInput' AND Pass = '$passwordInput'";
        $resultado = mysqli_query($conexion, $consulta);

        /* Crea un condicional en donde pregunte si el correo y la contraseña son iguales a los que se encuentran en la tabla alumnos */
        if ($resultado) {
            /* Crea una variable en donde se almacene el numero de filas que se encuentran en la tabla alumnos */
            $filas = mysqli_num_rows($resultado);

            /* Crea un condicional en donde pregunte si el numero de filas es igual a 1 */
            if ($filas == 1) {
                /* Crea una variable en donde se almacene el correo y la contraseña de la tabla alumnos */
                $datos = mysqli_fetch_array($resultado);

                /* Crea una variable en donde se almacene el correo y la contraseña de la tabla alumnos */
                $correo = $datos['Cor_Elec'];
                $password = $datos['Pass'];

                /* Compara si las variables correo y password coiniden con las cajas de texto inputCorreo e inputPassword */
                if ($correo == $correoInput && $password == $passwordInput) {
                    /* Crea una sesion en donde se almacene el correo y la contraseña de la tabla alumnos */
                    $_SESSION['correo'] = $correo;
                    $_SESSION['password'] = $password;

                    /* Redirecciona a la pagina principal */
                    header("location: ../index.php");
                } else {
                    /* Envia una alerta para rellenar todos los campos */
                    echo "<script>
                            alert('Correo o contraseña incorrectos');
                            window.location = 'loginAlumno.php'
                        </script>";
                }

                /*  Manda un mensaje de que fue aceptado el login 
                echo '<script type="text/javascript">
                        alert("Bienvenido");
                    </script>'; */

            } else {
                /* Envia una alerta para que el usuario ingrese un correo y una contraseña correctos */
                echo "<script>
                        alert('Correo o contraseña incorrectos');
                        window.location = '../loginAlumno.php'
                    </script>";
            }
        } 
        else {
            /* Envia una alerta para que el usuario ingrese un correo y una contraseña correctos */
            echo "<script>
                    alert('Correo o contraseña incorrectos');
                    window.location = '../loginAlumno.php'
                </script>";
        }
        mysqli_close($conexion);
    } 
    else {
        /* Envia una alerta para que el usuario ingrese un correo y una contraseña correctos */
        echo "<script>
                alert('No se permiten campos vacios');
                window.location = 'loginAlumno.php' 
            </script>";
    }
?>