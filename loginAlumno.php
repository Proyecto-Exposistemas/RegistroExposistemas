<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Iniciar sesión o registrarse</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="php/registro_Estudiantes_bd.php" class="sign-in-form" method="POST">
                    <h2 class="title">Iniciar sesión como estudiante</h2>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Correo" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" />
                    </div>

                    <input type="submit" value="Iniciar sesión" class="btn solid" />
                </form>

                <form action="php/registro_Estudiantes_bd.php" method="POST" class="sign-up-form">
                    <h2 class="title">Registrar estudiante</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre" name="nombre" autocomplete="off" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Apellido paterno" name="ap" autocomplete="off" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Apellido materno" name="am" autocomplete="off"/>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-id-card"></i>
                        <input type="text" placeholder="Número de control" name="nc" autocomplete="off" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Correo institucional" name="correo" autocomplete="off" />
                    </div>

                    <div class="input-field">
                        <div class="options">
                            <i class="fas fa-clipboard"></i>

                            <div class="container-options">
                                <div class="container-espectador">
                                    <input type="radio" name="participacion" id="espectador" class="espectador" value="espectador">
                                    <label for="espectador">Espectador</label>
                                </div>

                                <div class="container-expositor">
                                    <input type="radio" name="participacion" id="expositor" class="expositor" value="expositor">
                                    <label for="expositor">Expositor</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="password" autocomplete="off" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirmar contraseña" name="confirmPassword" autocomplete="off" />
                    </div>

                    <input type="submit" value="Registrarse" class="btn solid" />
                </form>


            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Aun no tienes cuenta?</h3>
                    <p>
                        Puedes crear tu cuenta rellenando los siguientes campos desde el siguiente botón
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Crear una cuenta
                    </button>
                </div>
                <img src="img/virtual-reality-animate.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3 class="mensaje">Ya tienes una cuenta?</h3>
                    <p class="mensaje">
                        Puedes regresar a la pestaña de iniciar sesión desde el siguiente botón
                    </p>
                    <button class="btn transparent second" id="sign-in-btn" style="margin-bottom: -85px;">
                        Iniciar sesión
                    </button>
                </div>
                <img src="img/cross-platform-software-animate.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>