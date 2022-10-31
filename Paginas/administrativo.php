<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventna adminstrativo</title>
  <link rel="stylesheet" href="css/administrativo.css">
</head>

<body>
  <section class="container-all">
    <header>
      <h2>Menú administrativo</h2>
    </header>

    <article class="navigation">
      <nav>
        <ul>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="business-outline"></ion-icon>
                </ion-icon>
              </span>
              <span class="title">Exposistemas ISC</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="document-text-outline"></ion-icon>
              </span>
              <span class="title">Registro del Programa</span>
            </a>
          </li>

          <li>
            <a href="../Paginas/constancias.html">
              <span class="icon">
                <ion-icon name="newspaper-outline"></ion-icon>
              </span>
              <span class="title">Emisión de constancias</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="receipt-outline"></ion-icon>
              </span>
              <span class="title">Reportes de asistencia</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="book-outline"></ion-icon>
              </span>
              <span class="title">Consulta del Programa</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="finger-print-outline"></ion-icon>
              </span>
              <span class="title">Cambio de contraseña</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="qr-code-outline"></ion-icon>
              </span>
              <span class="title">Escanear QR</span>
            </a>
          </li>

          <li>
            <a href="SesionesUsuario/logout.php">
              <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
              </span>
              <span class="title">Cerrar sesión</span>
            </a>
          </li>

        </ul>

        <div class="toggle"></div>
      </nav>
    </article>

    <article class="container-general" id="RegistroPrograma">

      <!-- Seccion del registro del programa de exposistemas #######################################3-->
      <div class="card">
        <h1>Registro del programa de exposistemas</h1>

        <form action="" method="post">

          <div class="campos">

            <div class="input-group">
              <input type="text" name="NombreActividad" autocomplete="off" id="NombreActividad" required class="input">
              <label for="NombreActividad" class="input-label">Nombre del proyecto</label>
            </div>

            <div class="input-group">
              <input type="text" name="NumeroActividad" autocomplete="off" id="NumeroActividad" required class="input">
              <label for="NumeroActividad" class="input-label">Posición de actividad</label>
            </div>

            <div class="input-group">
              <input type="text" name="temaActividad" autocomplete="off" id="temaActividad" required class="input">
              <label for="temaActividad" class="input-label">Tema del proyecto</label>
            </div>

            <div class="input-group">
              <input type="text" name="Materia" autocomplete="off" id="Materia" required class="input">
              <label for="Materia" class="input-label">Nombre de la asignatura</label>
            </div>

            <div class="input-group">
              <input type="time" name="HoraInicio" autocomplete="off" id="HoraInicio" required class="input">
              <label for="HoraInicio" class="input-label">Hora de inicio</label>
            </div>

            <div class="input-group">
              <input type="time" name="HoraFinal" autocomplete="off" id="HoraFinal" required class="input">
              <label for="HoraFinal" class="input-label">Hora de final</label>
            </div>

          </div>

          <div class="expositores">
            <!-- Codigo de el select menu -->
            <div class="opcionesExpositores">
              <div class="container">
                <h2>Expositores</h2>

                <div class="select-box" style="margin-top: -25px">

                  <div class="options-container">
                  </div>

                  <div class="selected">
                    Seleccione los integrantes del equipo
                  </div>

                  <div class="search-box">
                    <input type="text" placeholder="Ingresa un nombre..." />
                  </div>

                </div>

              </div>

            </div>
            <!-- Código del contenedor de nombres -->
            <div class="contanerPersonas">

              <div class="containerP">
                <h2 style="margin-bottom: -5px;">Integrantes del equipo</h2>

              </div>
            </div>

          </div>

          <div class="expositores">
            <!-- Codigo de el select menu -->
            <div class="opcionesExpositores">
              <div class="container">
                <h2>Expositores</h2>

                <div class="select-box" style="margin-top: -25px">

                  <div class="options-container">
                  </div>

                  <div class="selected">
                    Seleccione los integrantes del equipo
                  </div>

                  <div class="search-box">
                    <input type="text" placeholder="Ingresa un nombre..." />
                  </div>

                </div>

              </div>

            </div>
            <!-- Código del contenedor de nombres -->
            <div class="contanerPersonas">

              <div class="containerP">
                <h2 style="margin-bottom: -5px;">Lista de integrantes del equipo</h2>

              </div>
            </div>
            
          </div>

          <div class="botones">
            <input type="submit" class="btn" name="btn-buscar" id="btn-buscar" value="Buscar registro">
            <input type="submit" class="btn" name="btn-actualizar" id="btn-actualizar" value="Actualizar Registro">
            <input type="submit" class="btn" name="btn-enviar" id="btn-enviar" value="Ingresar registro">
            <input type="submit" class="btn" name="btn-eliminar" id="btn-eliminar" value="Eliminar registro">
          </div>

        </form>
      </div>

      <!-- Sección para la emisión del programa de exposistemas -->
      <div class="card">
        <h2>Emisión de constancias</h2>
      </div>

      <!-- Sección para la emisión de reportes de asistencia -->
      <div class="card">
        <h2>Reporte de alumnos ausentes</h2>
        <?php
          include("reportes_alumnos.php");
        ?>
      </div>

      <div class="card">
        <h2>Reporte de externos ausentes</h2>
        <?php
          include("reportes_externos.php");
        ?>
      </div>

      <!-- Sección para la consulta del programa de exposistemas -->
      <div class="card">
        <h2>Consulta del programa exposistemas</h2>
        <article class="contenedor-tabla">

          <table class="table-cebra">

            <thead>
              <tr>
                <th class="sticky"> Numero de actividad </th>

                <th> Nombre de actividad </th>

                <th> Descripción </th>

                <th> Hora de Inicio </th>

                <th> Expositores </th>

                <th>Asesores</th>

                <th>Materia</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <?php
                    include_once("../CRUD/CRUD_bd_general.php");
                    $con=new CRUD_general();
                    $con->conexionBD();
                
                    $consulta="SELECT DISTINCT evento.no_evento,evento.evento,evento.descripcion,evento.hora_inicio,alumnos.nombre,docentes.nombre,asesores_evento.materia
                    FROM evento,alumnos,evento_alumnos,docentes,asesores_evento WHERE alumnos.no_control=evento_alumnos.no_control and docentes.rfc=asesores_evento.rfc and evento.no_evento=evento_alumnos.no_evento and evento.no_evento=asesores_evento.no_evento ORDER BY evento.no_evento";
                    $consulta_2="SELECT *FROM asesores_evento";
                    $parametro=[":selecion"=>"selecion_2"];
                    $resultado=$con->Mostrar($consulta);
                    $resultado_2=$con->Mostrar($consulta_2);
                    //var_dump($resultado);
            
                    for($i=0;$i<count($resultado);$i++){?>
                      <td><?php echo $resultado[$i]['no_evento'];?></td>
                      <td><?php echo $resultado[$i]['evento'];?></td>
                      <td ><?php echo $resultado[$i]['descripcion'];?></td>
                      <td><?php echo $resultado[$i]['hora_inicio'];?></td>
                      <td><?php echo $resultado[$i]['nombre'];?></td>
                      <td><?php echo $resultado[$i]['nombre'];?></td>
                      <td><?php echo $resultado[$i]['materia'];?></td>

                      
                      
                      
                      
                   </tr>
                   </tbody>
                   <?php
                    
                  ?>  
                  }
              </tr>
            </tbody>
          <?php
                }


          ?>
          </tr>
          </tbody>

          </table>
        </article>
      </div>

      <!-- Sección para el cambio de contraseña #######################################################3-->
      <div class="card">
        <h2>Cambiar la contraseña</h2>
        <div class="campos">
          <div class="input-group">
            <input type="text" name="contraseña_anterior" autocomplete="off" id="contraseña_anterior" required class="input">
            <label for="contraseña_anterior" class="input-label">Contraseña</label>
          </div>

          <div class="input-group">
            <input type="text" name="nueva_contraseña" autocomplete="off" id="nueva_contraseña" required class="input">
            <label for="nueva_contraseña" class="input-label">Nueva contraseña</label>
          </div>

          <div class="input-group">
            <input type="text" name="confirma_contraseña" autocomplete="off" id="confirma_contraseña" required class="input">
            <label for="confirma_contraseña" class="input-label">Confirmar contraseña</label>
          </div>
          <div class="botones">
            <input type="submit" class="btn" name="btn-guardarC" id="btn-guardarC" value="   Guardar   ">
          </div>
        </div>


        <!-- Seccion para escanear los códigos QR -->
        <div class="card">
          <h2>Escanear código QR</h2>
          <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
          <label id="titulo">Escanea el codigo QR</label>
          <!-- visualizacion de la camara -->
          <div id="video">
            <video id="previsualizacion" width="50%"></video>
          </div>
          <form action="funcion.html" method="post" id="formulario" name="formulario">
            <label id="resultado">Resultado</label>
            <!-- caja de texto -->
            <div id="caja">
              <input type="text" id="text" v-model="content" onChange=actualizar>
            </div>
          </form>
          <!-- etiqueta script -->
          <script type="text/javascript">
            let scanner = new Instascan.Scanner({
              video: document.getElementById('previsualizacion')
            });

            Instascan.Camera.getCameras().then(function(cameras) {
              if (cameras.length > 0) {
                scanner.start(cameras[0]);
              } else {
                console.error("No se encontraron cámaras");
                alert("no se han encontrado camaras");
              }
            }).catch(function(e) {
              console.error(e);
              alert("ERROR:" + e);
            });
            /* mandar el resultado de qr a caja de texto */
            scanner.addListener('scan', function(c) {
              let recurso = document.getElementById('text').value = c;
              var formulario = document.getElementById('formulario');
              var datos = new FormData(formulario);
              console.log(datos);
              console.log(datos.get('text'));
              fetch('funcion.php', {
                method: 'POST',
                body: datos
              })
            });
          </script>
        </div>

    </article>

  </section>
  <!-- Importacion de los íconos de Ionic -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Creacion del script general -->
  <script>
    let navigation = document.querySelector('.navigation')
    let toggle = document.querySelector('.toggle')

    toggle.onclick = function() {
      navigation.classList.toggle('active')
    }
  </script>

  <script src="SesionesUsuario/session_expiracion.js"></script>
  <script src="../js/MiJavaScript.js"></script>
</body>

</html>