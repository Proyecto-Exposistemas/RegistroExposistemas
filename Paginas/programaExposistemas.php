<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Exposistemas</title> 
    <script src="../js/html2pdf.bundle.min.js"></script> 
    <script src="../js/scriptPDF.js"></script>
    <link rel="stylesheet" href="css/estilos_programa_exposistemas.css">
</head>
<body>
<script src="../SesionesUsuario/session_expiracion.js"></script>
<div class="card">

<h2>PROGRAMA EXPOSISTEMAS</h2><br>
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
            include_once("CRUD/CRUD_bd_general.php");
            $con=new CRUD_general();
            $con->conexionBD();
        
            $consulta_evento  = "SELECT DISTINCT  evento.no_evento, evento.evento, evento.descripcion, 
            evento.hora_inicio, asesores_evento.materia 
            FROM evento, asesores_evento 
            WHERE evento.no_evento = asesores_evento.no_evento ORDER BY evento.no_evento ASC";
            $resultadoE = $con->MOSTRAR($consulta_evento); 

            $consulta_asesores = "SELECT DISTINCT docentes.nombre, docentes.paterno 
            FROM asesores_evento, docentes, evento WHERE evento.no_evento = :numero 
            AND evento.no_evento = asesores_evento.no_evento 
            AND docentes.rfc = asesores_evento.rfc";

            $consulta_alumnos = "SELECT DISTINCT alumnos.nombre, alumnos.paterno
            FROM evento, evento_alumnos, alumnos 
            WHERE evento.no_evento = :numero
            AND evento.no_evento = evento_alumnos.no_evento 
            AND evento_alumnos.no_control = alumnos.no_control";

            $consulta_externos = "SELECT DISTINCT ponentes_externos.nombre, ponentes_externos.paterno
            FROM evento, ponentes_externos, evento_externos 
            WHERE evento.no_evento = :numero AND evento.no_evento = evento_externos.no_evento 
            AND evento_externos.correo = ponentes_externos.correo";


            for($i=0;$i<count($resultadoE);$i++){?>
              <td><?php echo $resultadoE[$i]['no_evento'];?></td>
              <td><?php echo $resultadoE[$i]['evento'];?></td>
              <td ><?php echo $resultadoE[$i]['descripcion'];?></td>
              <td><?php echo $resultadoE[$i]['hora_inicio'];?></td>

              <td><?php
                  $resultado_alumnos = $con->MOSTRAR($consulta_alumnos,[":numero"=>$resultadoE[$i]['no_evento']]);
                  for ($j=0; $j < count($resultado_alumnos); $j++) { 
                      echo $resultado_alumnos[$j]["nombre"]." " . $resultado_alumnos[$j]["paterno"]."<br>";
                  }
                  $resultado_externos = $con->MOSTRAR($consulta_externos,[":numero"=>$resultadoE[$i]['no_evento']]);
                  for ($j=0; $j < count($resultado_externos); $j++) { 
                      echo $resultado_externos[$j]["nombre"]." ". $resultado_externos[$j]["paterno"]."<br>";
                  }
              ?></td>
              <td><?php
                  $resultado_asesores = $con->MOSTRAR($consulta_asesores,[":numero"=>$resultadoE[$i]['no_evento']]);
                  for ($j=0; $j < count($resultado_asesores); $j++) { 
                      echo $resultado_asesores[$j]["nombre"]." ".$resultado_asesores[$j]["paterno"]."<br>";
                  }
              ?></td>

              <td><?php echo $resultadoE[$i]['materia'];?></td>
          </tr>
      </tr>
  <?php
        }
  ?>
  </tr>
  </tbody>

  </table>
</article>
</div> 
<div> 
  <button class="btn" id="CrearPdf">PDF</button>
</div>

</body>
</html>

