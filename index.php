
<?php

include_once("SesionesUsuario/user_session.php");
include_once("SesionesUsuario/user_XAMP.php");

$user = new User();
$sesion = new UserSession();


if(isset($_SESSION['user'])){
    $user->setUser($sesion->getUser());

}else if(isset($_POST["username"]) && isset($_POST["password"])){

    $usuario = $_POST["username"];
    $pass = $_POST["password"];

    if($user->userExist($usuario,$pass)){

       $user->setUser($usuario);
       $sesion->setUser($user->getUsername(),$user->getNombre());
       include_once("PaginasVista/registro_alumnos.html");

    }else{
        $errorLogin ="Nombre de usuario y/o password incorrecto";
        include_once("/PaginasVista/login.php");
    }

}else{
    include_once "/PaginasVista/login.php";
}

?>
