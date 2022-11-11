<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperación código qr </title>
  <link rel="stylesheet" href="../css/logincopy.css">
  <link rel="shortcut icon" href="/img/logo-ISC.ico" type="image/x-icon">
</head>

<body>
  <div class="container" id="circulo">
    <div class="forms-container">
      <br><br><br><br><br>
      <form action="">
         <br><br><br><br><br><br><br><br><br><br>
        <div class="signin-signup">
            <h2>Retoma captura de tu codigo qr </h2>
            <h4>Ya que si no lo llevas no podras ingresar</h4>
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
  
            <div class="input-field" id="cajaRolEstudiante">
              <i class="fas fa-clipboard"></i>
              <div class="options">
                  
                  <select name="rolEstudiante" id="rolEstudiante">
                    <option value="0">Selecciona un rol</option>
                    <option value="1">Espectador</option>
                    <option value="2">Expositor</option>
                  </select>
              </div>
  
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
              
              <select name="inputFuncion" id="inputFuncion">
                <option value="0">Selecciona una funcion</option>
                <option value="Coordinador del programa general">Coordinador del programa general</option>
                <option value="Coordinador de seguimiento y logística">Coordinador de seguimiento y logística</option>
                <option value="Coordinador de atención a conferencistas">Coordinador de atención a conferencistas</option>
                <option value="Coordinador de registro de participantes">Coordinador de registro de participantes</option>
                <option value="Coordinador de presentación de proyectos">Coordinador de presentación de proyectos</option>
                <option value="Coordinador de contacto a conferencistas">Coordinador de contacto a conferencistas</option>
              </select>
            </div>
  
            <div class="input-field" id="cajaRfc">
              <i class="fas fa-id-card"></i>
              <input id="rfc" type="text" placeholder="RFC" name="rfc" autocomplete="off" />
            </div>
            
            <div class="input-field" id="cajaProcedencia">
              <i class="fas fa-map-marker-alt"></i>
              <input id="lugar" type="text" placeholder="Correo" name="procedencia" autocomplete="off" />
            </div>
            <input  id="btn" type="submit" value="Generar" class="btn solid" id="enviar"/>
            <?php
            require 'phpqrcode/qrlib.php';
                $dir='temp/';
                if(isset($_GET['identidad'])){
                   $_GET['numeroControl'];
                   $_GET['procedencia'];
                   $_GET['rfc'];
                   $_POST['generar'];
                   $_GET['procedencia'];
                 }
                $bandera=FALSE;
                $nivel=['identidad'];
                //$numero_control =['numeroControl'];
                $correo=['procedencia'];
                $rfc=['rfc'];

            if($nivel==1 || $nivel==2 || $nivel==3)
              if(!file_exists($dir))
                      mkdir($dir);
                  $filename= $dir.'test.png';
                  $bandera=FALSE;
                  $tamanio=10;
                  $level='M';
                  $frameSize=3;
                  if($nivel==1 && $bandera==FALSE){
                      $contenido=$numero_control;
                      $bandera=TRUE;
                      echo "Sali de la condicion 1"; 
                  }  
                  if($nivel==2 && $bandera==FALSE){
                      $contenido=$rfc;
                      $bandera=TRUE; 
                      echo "Sali de la condicion 2"; 
                  }      
                  if($nivel==3 && $bandera==FALSE){
                      $contenido=$correo;
                      $bandera=TRUE;
                      echo "Sali de la condicion 3";
                  }      
                  if($bandera==TRUE){
                    QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);
                    echo '<img src="'.$filename.'" />';
                  }    

          ?> 
        </div>
      </form> 
    </div>

    <div class="panels-container">
      <div class="panel left-panel" id="panel1">

        <img src="../img/cross-platform-software-animate.svg" class="image" alt="" />
      </div>

      <div class="panel right-panel" id="panel2">
        <img src="./img/virtual-reality-animate.svg" class="image" alt="" />
      </div>

    </div>
  </div>

  <script src="/js/campos_ventana_auxiliar.js"></script>

</body>
</html>