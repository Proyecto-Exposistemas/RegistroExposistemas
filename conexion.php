<?php
function conecta(){
    global $conexion;
    
    $conexion=mysqli_connect("127.0.0.1:33065","root","","expo_sistemas");
                //servidor, administrador, password y bd
        if (!$conexion)
        {
            echo "No se puede establecer una conexion";
        }
        else 
        {
            echo "CONEXION EXITOSA!!!";
        }
}
?>