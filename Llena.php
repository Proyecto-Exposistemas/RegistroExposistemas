<?php
        //include 'conexion.php';
        //conecta();
//$id=$_POST['id'];
        $correo= filter_input(INPUT_POST, "correo");
        $nombre= filter_input(INPUT_POST, "nombre");
        $apepaterno=filter_input(INPUT_POST, "ap");

        echo $correo.$nombre

        
       /*if($idpelicula!="" && $nombre!="" && $descripcion!="" && $genero!="" && $duracion!="")
        {
           mysqli_select_db($conexion, "peliculas");
      //$tildes = $link->query("SET NAMES 'utf8'"); 
      //Para que se muestren las tildes     
        mysqli_query($conexion,"INSERT INTO tablapeliculas (idpelicula,nombre,descripcion,genero,duracion) VALUES ('$idpelicula','$nombre','$descripcion','$genero','$duracion')");

        mysqli_close($conexion);
            }*/
        ?>
