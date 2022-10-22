<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="css/toast_alert.css">
  <title>Iniciar sesión o registrarse</title>
</head>

<body>
  <div class="container" id="circulo">
    <div class="forms-container">
      <div class="signin-signup">

        <form method="POST" class="sign-in-form" id="formulario">
          <h2 class="title">Registrarme</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="nombre" type="text" placeholder="Nombre" name="nombre" autocomplete="off" />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="ap" type="text" placeholder="Apellido paterno" name="ap" autocomplete="off" />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="am" type="text" placeholder="Apellido materno" name="am" autocomplete="off" />
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input id="email" type="email" placeholder="Correo" name="correo" autocomplete="off" />
          </div>

          <div class="input-field" id="cajaIdentidad">
            <i class="fas fa-clipboard"></i>
            <div class="options">
              
              <select name="identdad" id="identidad">
                <option value="0">¿Quién Eres?</option>
                <option value="1">Estudiante</option>
                <option value="2">Docente</option>
                <option value="3">Externo</option>
              </select>
            </div>

          </div>

          <div class="input-field" id="cajaRoles">
            <i class="fas fa-clipboard"></i>
            <div class="options">
              
              <select name="roles" id="roles">
                <option value="0">Selecciona un rol</option>
                <option value="1">Espectador</option>
                <option value="2">Expositor</option>
                <option value="3">Panelista</option>
                <option value="4">Conferencista</option>
              </select>
            </div>
          </div>

          <div class="input-field" id="cajaTelefono">
            <i class="fas fa-mobile"></i>
            <input id="tel" type="text" placeholder="Número de teléfono" name="telefono" autocomplete="off" />
          </div>

          <div class="input-field" id="cajaNumeroControl">
            <i class="fas fa-id-card"></i>
            <input id="control" type="text" placeholder="Número de control" name="numeroControl" autocomplete="off" />
          </div>

          <div class="input-field" id="cajaSemestre">
            <i class="fas fa-graduation-cap"></i>
            <input id="semestre" type="text" placeholder="Semestre" name="semestre" autocomplete="off" />
          </div>

          <div class="input-field" id="cajaTitulo">
            <i class="fas fa-award"></i>
            <input id="titulo" type="text" placeholder="Titulo" name="titulo" autocomplete="off" />
          </div>

          <div class="input-field" id="cajaFuncion">
            <i class="fas fa-award"></i>
            <input id="funcion" type="text" placeholder="Función" name="funcion" autocomplete="off" />
          </div>

          <div class="input-field" id="cajaRfc">
            <i class="fas fa-id-card"></i>
            <input id="rfc" type="text" placeholder="RFC" name="rfc" autocomplete="off" />
          </div>

          <div class="input-field" id="cajaProcedencia">
            <i class="fas fa-map-marker-alt"></i>
            <input id="lugar" type="text" placeholder="Lugar de procedencia" name="procedencia" autocomplete="off" />
          </div>

          <input  id="btn" type="submit" value="Registrarse" class="btn solid" id="enviar"  />
        </form>

        <form method="POST" class="sign-up-form">
          <h2 class="title">Iniciar sesión administrador</h2>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Usuario" name="inputUser" class="" autocomplete="off" />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contraseña" name="inputPassword" class="" autocomplete="off" />
          </div>

          <input type="submit" value="Iniciar sesión" class="btn solid" />
        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel" id="panel1">
        <div class="content">
          <h3 class="mensaje1">¿Eres un administrador?</h3>
          <p class="mensaje1">Si eres un administrador, inicia sesión para poder ingresar a el sistema.</p>
          <button class="btn transparent boton1" id="sign-up-btn">
            Iniciar sesión
          </button>
        </div>
        <img src="img/cross-platform-software-animate.svg" class="image" alt="" />
      </div>

      <div class="panel right-panel" id="panel2">
        <div class="content">
          <h3 class="mensaje2">¿No eres un administrador?</h3>
          <p class="texto2">
            Puedes regresar a la pestaña de registro desde el siguiente botón para completar el ingreso de tus datos
          </p>
          <button class="btn transparent boton2" id="sign-in-btn" style="margin-bottom: -85px;">
            Iniciar sesión
          </button>
        </div>
        <img src="img/virtual-reality-animate.svg" class="image" alt="" />
      </div>

    </div>
  </div>

  <script src="js/app.js"></script>
  <script src="js/campos.js"></script>
  <script src="js/registro.js"></script>
  <!-- <script src="js/java.js"></script> -->
  <script src="../js/toast_alert.js"></script>
</body>

</html>