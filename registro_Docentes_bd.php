<?php
    include 'conexiones.php';

    /* Extraccion de las variables de el fomrulario php*/
    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $titulo = $_POST['titulo'];
    $rfc = $_POST['rfc'];
    $correo = $_POST['correo'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirmPassword'];

    /*Comprueba que los campos no se encuentren vacios*/
    
?>