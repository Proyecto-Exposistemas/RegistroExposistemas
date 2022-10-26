<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventna adminstrativo</title>
  <link rel="stylesheet" href="../css/administrativo.css">
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
            <a href="#">
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
            <a href="../SesionesUsuario/logout.php">
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
      
      <!-- Seccion del registro del programa de exposistemas -->
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
                <h2>Asistentes de proyecto</h2>

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
        <h2>Reportes de asistencia</h2>
      </div>

      <!-- Sección para la consulta del programa de exposistemas -->
      <div class="card">
        <h2>Consulta del programa exposistemas</h2>
        <article class="contenedor-tabla">

          <table class="table-cebra">

            <thead>
              <tr>
                <th class="sticky"> Nombre </th>

                <th> Numero de control </th>

                <th> Semestre </th>

                <th> Correo electronico </th>

                <th> Teléfono </th>

                <th>Grupo</th>
              </tr>
            </thead>

            <tbody>
            </tbody>

          </table>
        </article>
      </div>

      <!-- Sección para el cambio de contraseña -->
      <div class="card">
        <h2>Cambiar la contraseña</h2>
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

        <label id="resultado">Resultado</label>
        <!-- caja de texto -->
        <div id="caja">
            <input type="text" id="text" v-model="content">
        </div>
        <!-- etiqueta script -->
        <script type="text/javascript">
            let scanner = new Instascan.Scanner({
            video: document.getElementById('previsualizacion')
        }); 
        Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            }else{
                console.error("No se encontraron cámaras");
                alert("no se han encontrado camaras");
            } 
        }).catch(function(e){
            console.error(e);
            alert("ERROR:"+ e);
        });
        /* mandar el resultado de qr a caja de texto */
        scanner.addListener('scan', function(c){
            document.getElementById('text').value = c;
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

    toggle.onclick = function () {
      navigation.classList.toggle('active')
    }
  </script>
  <script src="../SesionesUsuario/session_expiracion.js"></script>
</body>

</html>


<!-- Php para las funciones de los botones -->
<?php
  /* Obten el boton que está siendo presionado */
  if(isset($_POST['btn-buscar'])){
    buscarDatos();
  }else if(isset($_POST['btn-actualizar'])){
    actualizarDatos();
  }else if(isset($_POST['btn-enviar'])){
    insertarDatos();
  }else if(isset($_POST['btn-eliminar'])){
    eliminarDatos();
  }

  /* Funcion para buscar los datos */
  function buscarDatos(){
    echo "Buscar datos";
  }

  /* Funcion para actualizar los datos */
  function actualizarDatos(){
    echo "Actualizar datos";
  }

  /* Funcion para insertar los datos */
  function insertarDatos(){
    // Conexión a la base de datos 
    include '../conexiones.php';

    /* echo "Insertar datos"; */
    $nombre_actividad = $_POST['NombreActividad'];
    $numero_actividad = $_POST['NumeroActividad'];
    $tema_actividad = $_POST['temaActividad'];
    $materia = $_POST['Materia'];
    $hora_inicio = $_POST['HoraInicio'];
    $hora_fin = $_POST['HoraFinal'];

    $hora_inicio = $hora_inicio . ":00";
    $hora_fin = $hora_fin . ":00";

    $consulta = "INSERT INTO `evento` (`no_evento`, `evento`, `hora_inicio`, `hora_fin`) VALUES ($numero_actividad, '$nombre_actividad', '$hora_inicio', '$hora_fin')";

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        /* lanza una alerta que confirme el registro */
        echo "<script>alert('Registro exitoso')</script>";
    }else{
        /* lanza una alerta que confirme el registro */
        echo "<script>alert('Registro fallido')</script>";
    }
  }

  /* Funcion para eliminar los datos */
  function eliminarDatos(){
    echo "Eliminar datos";
  }
  
?>

<!-- Php para cargar los campos en el selectbox -->
<?php
  include '../conexiones.php';

  $consulta = "SELECT nombre, paterno, materno, no_control FROM `alumnos` ORDER BY nombre ASC";
  $resultado = mysqli_query($conexion, $consulta);

  /* Junta el nombre con sus apellidos y guardalos en un arreglo */
  $nombre_completo = array();
  $numeros_control = array();

  while($fila = mysqli_fetch_array($resultado)){
    $nombre_completo[] = $fila['nombre'] . " " . $fila['paterno'] . " " . $fila['materno'];
    $numeros_control[] = $fila['no_control'];
  }
  /* Mediante javascrip, en la clase options-contaniner ingresa los datos que tiene el array nombre completo,
  dentro del div, crea un input de tipo check, con el name listaEspositores y el id igual al numero de control */
  echo "<script>
    let nombre_completo = " . json_encode($nombre_completo) . ";
    let numeros_control = " . json_encode($numeros_control) . ";

    let contenedor = document.querySelector('.options-container');

    for(let i = 0; i < nombre_completo.length; i++){
      contenedor.innerHTML += '<div class=\"option\" style=\"display: block;\"> <input type=\"radio\" class=\"radio\" id=\"' + numeros_control[i] + '\" name=\"expositoresParticipantes\" > <label for=\"' + numeros_control[i] + '\"id=\"etiqueta\" >' + nombre_completo[i] + '</label> </div>';
    }
  </script>";

  echo '<script src="../js/selectbox.js"></script>';

  /* */
?>

<!-- Php para cargar la seleccion en la lista de integrantes -->
<?php
  /* obten el valor del radio que está siendo presionado del conjunto expositoresParticipantes con javascript*/
  echo "<script>
  let listaOpciones = document.querySelectorAll('.option');
  /* Declara un array que se llame ListaNombres */
  let listaNombres = [];

  let nombresLista = document.querySelector('.containerP');
  

  listaOpciones.forEach(o => {
    o.addEventListener('click', (e) => {
      let valorTexto = e.target.textContent;
      
      if(valorTexto != ''){
        if(!listaNombres.includes(valorTexto)){
          /* Si el valor del texto ya está en el array, no lo agregues */
          listaNombres.push(valorTexto);
          console.log(listaNombres);

          /* cuenta los elementos de la lista */
          let contador = listaNombres.length;
          nombresLista.innerHTML += '<div class=\"nombres\"> <p class=\"nombreExpoenente\">' + valorTexto + '</p> <button class=\"btnEliminar\" type\"submit\" name=\"btnEliminar'+ contador+'\"><ion-icon name=\"backspace-outline\" class=\"iconoBoton\"></ion-icon></button> </div>';

        }
        else{
          console.log('Ya está en la lista');
        }
      }
    });

  });


  
  </script>";

?>
<!-- Php para eliminar de la lista de integrantes -->
<?php  
  /* Revisa si el boton ha sido pulsado */
  
?>

<!-- Php para -->