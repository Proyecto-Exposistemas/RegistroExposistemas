<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ventna adminstrativo</title>
  <link rel="stylesheet" href="../css/administrativo.css" />
</head>

<body>
  <div class="card">
    <!-- <h2>Reportes de asistencia alumnos</h2> -->
    <article class="contenedor-tabla">

      <table class="table-cebra">
        <thead>
          <tr>
            <th class="sticky">Nombre(s)</th>

            <th>Apellido paterno</th>

            <th>Apellido materno</th>

            <th>Número de control</th>

            <th>Semeste</th>

            <th>No. de registros</th>

            <th>Registro 1</th>

            <th>Registro 2</th>
          </tr>
        </thead>

        <?php
        include_once("CRUD/CRUD_bd_general.php");
        $obj = new CRUD_general();
        $obj->conexionBD();

        $consulta = "SELECT * FROM total_alumnos";
        $parametro = [":selecion" => "10"];
        $resultado = $obj->Mostrar($consulta);


        //var_dump($resultado);

        for ($i = 0; $i < count($resultado); $i++) {
          $nc = $resultado[$i]['no_control'];
          $querry_verificacion = "SELECT * FROM registros_alumnos
          WHERE no_control = '$nc'";

          $resp  = $obj->MOSTRAR($querry_verificacion);
          $no_registros = count($resp);
          $registros = ["", ""];
          $hora_ant = "";
          $counter = 0;

          for ($j = 0; $j < count($resp); $j++) {

            $hora = qutarSec($resp[$j]["hora"]);
            $hora_ant = qutarSec($hora_ant);

            if ($hora == $hora_ant) {
              $no_registros = $no_registros - 1;
            } else {
              //echo 'Si entra aquí con el alumno '. $resp[$j]["no_control"]. ' a las '. $resp[$j]["hora"]. '<br>';
              $registros[$counter] = $resp[$j]["hora"];
              $counter++;
            }
            $hora_ant = $resp[$j]["hora"];
            //echo $hora_ant. '<br>';
          }

          if ($no_registros <= 2) {

        ?>

            <td class="sticky"><?php echo $resultado[$i]['nombre']; ?></td>
            <td><?php echo $resultado[$i]['paterno']; ?></td>
            <td><?php echo $resultado[$i]['materno']; ?></td>
            <td><?php echo $resultado[$i]['no_control']; ?></td>
            <td><?php echo $resultado[$i]['semestre']; ?></td>
            <td><?php echo $no_registros ?></td>
            <td><?php echo $registros[0] ?></td>
            <td><?php echo $registros[1] ?></td>


          <?php
          }
          ?>

          </tr>
          </tbody>
        <?php
        }

        ?>
      </table>
    </article>
  </div>
</body>

</html>

<?php
function qutarSec($cadena)
{
  $cad = substr($cadena, 0, -3);

  return $cad;
}
?>