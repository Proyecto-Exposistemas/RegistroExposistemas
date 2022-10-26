<?php
   
   require 'phpqrcode/qrlib.php';

   $dir='temp/';
   $identificador=$_GET['identificador'];
   
   if(!file_exists($dir))
        mkdir($dir);

    $filename= $dir.'test.png';
    
    $tamanio=10;
    $level='M';
    $frameSize=3;
    $contenido=$identificador;
    
    QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);
                                 echo "POR FAVOR DESCARGA TU CODIGO QR";
    echo '<img src="'.$filename.'" />';

?>

